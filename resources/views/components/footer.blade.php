<footer class="footer   footer-white ">
<div class="container">
    <div class="row">
    <nav class="footer-nav">
        <ul>
        <li><a href="{{ $footerData->footer_text1_url ?? null }}" target="_blank">{{ $footerData->footer_text1 ?? null }}</a></li>
        <li><a href="{{ $footerData->footer_text2_url ?? null }}" target="_blank">{{ $footerData->footer_text2 ?? null }}</a></li>
        <li><a href="{{ $footerData->footer_text3_url ?? null }}" target="_blank">{{ $footerData->footer_text3 ?? null }}</a></li>
        </ul>
    </nav>
    <div class="credits ml-auto">
        <span class="copyright">
            {{ $footerData->footer_textA ?? null }} <script>
            document.write(new Date().getFullYear())
        </script> {{ $footerData->footer_textB ?? null }}<i class="{{ $footerData->footer_icon ?? null }}"></i>{{ $footerData->footer_textC ?? null }}
        </span>
    </div>
    </div>
</div>
</footer>