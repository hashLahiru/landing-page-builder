<?php

use App\Models\Component;
use App\Models\ComponentField;
use App\Models\ProductCategory;
use App\Models\Product;

use App\Http\Controllers\AdminController;
use App\Http\Controllers\LandingPageController;
use App\Http\Controllers\ImageController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthenticatedSessionController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\AdminProductController;
use Laravel\Pail\ValueObjects\Origin\Console;

// Landing Page Route
Route::get('/', function () {
    $components = [
        'header',
        'product',
        'feature2',
        'feature3',
        'feature4',
        'feature5',
        'feedback1',
        'feedback2',
        'feedback3',
        'ProductList1',
        'ProductList2',
        'ProductList3',
        'ProductList4',
        'PricingPlan1',
        'PricingPlan2',
        'PricingPlan3',
        'PricingPlan4',
        'PricingPlan5',
        'Teams1',
        'Teams2',
        'Teams3',
        'Teams4',
        'Teams5',
        'header2',
        'header3',
        'header4',
        'footer',
        'about',
        'navbar',
    ];

    $data = [];
    foreach ($components as $componentName) {
        $component = Component::where('name', $componentName)->first();
        if ($component) {
            $fields = ComponentField::where('component_id', $component->id)
                ->with('values')
                ->get();
            $componentData = [];
            foreach ($fields as $field) {
                $componentData[$field->field_name] = $field->values->pluck('value')->first();
            }
            $data[$componentName . 'Data'] = (object) $componentData;
        }
    }

    return view('home', $data);
});

// spice home  Page Route
Route::get('/spice-home', function () {
    $components = [
        'SpiceNavbar',
        'HeroHome',
        'HomeProductCategories',
        'PopularProduct',
        'BlogPost',
        'SpiceFooter',
        //'HeroProduct',
        //'HeroContactUs',
        //'SpiceContactus',
    ];

    $data = [];
    foreach ($components as $componentName) {
        $component = Component::where('name', $componentName)->first();
        if ($component) {
            $fields = ComponentField::where('component_id', $component->id)
                ->with('values')
                ->get();
            $componentData = [];
            foreach ($fields as $field) {
                $componentData[$field->field_name] = $field->values->pluck('value')->first();
            }
            $data[$componentName . 'Data'] = (object) $componentData;
        }
    }

    $popularProducts = Product::where('is_popular', 1)->where('status', 'active')
        ->inRandomOrder()
        ->limit(3)
        ->get();

    $data['PopularProductData'] = $popularProducts;

    return view('spice-web-template.pages.home', $data);
});

Route::get('/spice-products', function () {
    // Fetch categories and product counts
    $categories = DB::table('product_categories')
        ->leftJoin('products', 'product_categories.id', '=', 'products.category_id')
        ->select(
            'product_categories.id',
            'product_categories.cat_image',
            'product_categories.cat_name as name',
            DB::raw('COUNT(products.id) as product_count')
        )
        ->whereNotNull('product_categories.cat_name')
        ->whereNotNull('product_categories.cat_image')
        ->groupBy('product_categories.id', 'product_categories.cat_image', 'product_categories.cat_name')
        ->get();

    $products = DB::table('products')
        ->leftJoin('product_categories', 'products.category_id', '=', 'product_categories.id')
        ->select(
            'products.id',
            'products.prod_name',
            'products.description',
            'products.price',
            'products.category_id',
            'products.discount',
            'products.img1_url',
            'products.img2_url',
            'products.img3_url'
        )
        ->get();

    // Define the components as before
    $components = ['SpiceNavbar', 'HeroProduct', 'SpiceFooter'];

    // Fetch component data
    $data = [];
    foreach ($components as $componentName) {
        $component = Component::where('name', $componentName)->first();
        if ($component) {
            $fields = ComponentField::where('component_id', $component->id)
                ->with('values')
                ->get();

            $componentData = [];
            foreach ($fields as $field) {
                $componentData[$field->field_name] = $field->values->pluck('value')->first() ?? '';
            }
            $data[$componentName . 'Data'] = (object)$componentData;
        }
    }

    // Add products and categories to the response
    $data['products'] = $products;
    $data['categories'] = $categories;

    return view('spice-web-template.pages.products', $data);
});

Route::get('/product-description', function () {
    return view('spice-web-template.pages.productDescription');
});

// spice contact us   Page Route
Route::get('/spice-contactus', function () {
    $components = [
        'SpiceNavbar',
        // 'HeroContactUs',
        'SpiceContactus',
        'SpiceFooter',
    ];

    $data = [];
    foreach ($components as $componentName) {
        $component = Component::where('name', $componentName)->first();
        if ($component) {
            $fields = ComponentField::where('component_id', $component->id)
                ->with('values')
                ->get();
            $componentData = [];
            foreach ($fields as $field) {
                $componentData[$field->field_name] = $field->values->pluck('value')->first();
            }
            $data[$componentName . 'Data'] = (object) $componentData;
        }
    }

    return view('spice-web-template.pages.contactUs', $data);
});


// Profile Management Routes
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Admin Routes
Route::middleware('auth')->group(function () {
    Route::get('/admin', function () {
        return view('admin.dashboard');
    });

    Route::get('/admin-test', function () {
        return view('admin.dashboard');
    });

    Route::get('/messages', [ContactController::class, 'index'])->name('admin.messages');
    Route::get('/messages/{id}', [ContactController::class, 'show'])->name('admin.messages.show');

    Route::get('/page-editor', function () {
        $components = Component::all();
        return view('admin.page-editor', [
            'components' => $components
        ]);
    });

    Route::get('/admin-products', function () {
        return view('admin.products');
    })->name('products.view');

    Route::get('/admin/products', [AdminProductController::class, 'getProducts'])->name('product.get');
    Route::get('/product/create', [AdminProductController::class, 'create'])->name('product.create');
    Route::post('/products', [AdminProductController::class, 'store'])->name('product.store');
    Route::post('/product/delete', [AdminProductController::class, 'delete'])->name('product.delete');

    Route::post('/save-component-fields', [AdminController::class, 'saveComponentFields']);

    // Routes for edit the product
    Route::get('/product/edit/{id}', [AdminProductController::class, 'edit'])->name('product.edit');
    Route::post('/product/update/{id}', [AdminProductController::class, 'update'])->name('product.update');
});

// Retrieve Component Fields for AJAX
Route::get('/get-component-fields/{componentId}', function ($componentId) {
    $component = Component::with('fields.values')->find($componentId);

    if ($component) {
        $fields = $component->fields->map(function ($field) {
            return [
                'id' => $field->id,
                'field_name' => $field->field_name,
                'value' => $field->values->first()->value ?? '',
            ];
        });
        return response()->json(['fields' => $fields]);
    }

    return response()->json(['error' => 'Component not found'], 404);
});

// Image Upload Routes
Route::get('/image-uploader', [ImageController::class, 'index'])->name('image.uploader');
Route::post('/admin/image-upload', [ImageController::class, 'upload'])->name('image.upload');

// Landing Page Component Data
Route::get('/landing-page/component/{id}', [LandingPageController::class, 'getComponentData']);

// Contact Form Routes
Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');

// Logout Route
Route::post('/logout', [AuthenticatedSessionController::class, 'destroy'])->name('logout');

// Authentication Routes
require __DIR__ . '/auth.php';
