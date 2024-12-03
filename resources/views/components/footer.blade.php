<footer class="footer footer-big footer-black">
    <div class="container">
      <div class="row">
        <div class="col-md-2 col-sm-3 col-6 ml-auto mr-auto">
          <div class="form-group dropup">
            <select name="huge" class="selectpicker" data-style="btn-default btn-block btn-round" data-menu-style="dropdown-blue">
              <option value="id">{{ $footerData->footer_drop1_1 ?? null }}</option>
              <option value="ms">{{ $footerData->footer_drop1_2 ?? null }}</option>
              <option value="ca">{{ $footerData->footer_drop1_3 ?? null }}</option>
              <option value="da">{{ $footerData->footer_drop1_4 ?? null }}</option>
              <option value="de">{{ $footerData->footer_drop1_5 ?? null }}</option>
              <option value="en" selected="">English</option>
              <option value="es">{{ $footerData->footer_drop1_6 ?? null }}</option>
              <option value="el">{{ $footerData->footer_drop1_7 ?? null }}</option>
              <option value="fr">{{ $footerData->footer_drop1_8 ?? null }}</option>
              <option value="it">{{ $footerData->footer_drop1_9 ?? null }}</option>
              <option value="hu">{{ $footerData->footer_drop1_10 ?? null }}</option>
              <option value="nl">{{ $footerData->footer_drop1_11 ?? null }}</option>
              <option value="no">{{ $footerData->footer_drop1_12 ?? null }}</option>
              <option value="pl">{{ $footerData->footer_drop1_13 ?? null }}</option>
              <option value="pt">{{ $footerData->footer_drop1_14 ?? null }}</option>
              <option value="fi">{{ $footerData->footer_drop1_15 ?? null }}</option>
              <option value="sv">{{ $footerData->footer_drop1_16 ?? null }}</option>
              <option value="tr">{{ $footerData->footer_drop1_17 ?? null }}</option>
              <option value="is">{{ $footerData->footer_drop1_18 ?? null }}</option>
              <option value="cs">{{ $footerData->footer_drop1_19 ?? null }}</option>
              <option value="ru">{{ $footerData->footer_drop1_20 ?? null }}</option>
              <option value="th">{{ $footerData->footer_drop1_21 ?? null }}</option>
              <option value="zh">{{ $footerData->footer_drop1_22 ?? null }}</option>
              <option value="zh-TW">{{ $footerData->footer_drop1_23 ?? null }}</option>
              <option value="ja">{{ $footerData->footer_drop1_24 ?? null }}</option>
              <option value="ko">{{ $footerData->footer_drop1_25 ?? null }}</option>
            </select>
          </div>
          <div class="form-group dropup">
            <select name="huge" class="selectpicker" data-style="btn-default btn-block btn-round" data-menu-style="dropdown-blue">
              <option value="ARS"> {{ $footerData->footer_drop2_1 ?? null }}</option>
              <option value="AUD"> {{ $footerData->footer_drop2_2 ?? null }}</option>
              <option value="BRL"> {{ $footerData->footer_drop2_3 ?? null }}</option>
              <option value="CAD"> {{ $footerData->footer_drop2_4 ?? null }}</option>
              <option value="CHF"> {{ $footerData->footer_drop2_5 ?? null }}</option>
              <option value="CNY"> {{ $footerData->footer_drop2_6 ?? null }}</option>
              <option value="CZK"> {{ $footerData->footer_drop2_7 ?? null }}</option>
              <option value="DKK"> {{ $footerData->footer_drop2_8 ?? null }}</option>
              <option value="EUR"> {{ $footerData->footer_drop2_9 ?? null }}</option>
              <option value="GBP"> {{ $footerData->footer_drop2_10 ?? null }}</option>
              <option value="HKD"> {{ $footerData->footer_drop2_11 ?? null }}</option>
              <option value="HUF"> {{ $footerData->footer_drop2_12 ?? null }}</option>
              <option value="IDR"> {{ $footerData->footer_drop2_13 ?? null }}</option>
              <option value="ILS"> {{ $footerData->footer_drop2_14 ?? null }}</option>
              <option value="INR"> {{ $footerData->footer_drop2_15 ?? null }}</option>
              <option value="JPY"> {{ $footerData->footer_drop2_16 ?? null }}</option>
              <option value="KRW"> {{ $footerData->footer_drop2_17 ?? null }}</option>
              <option value="MYR"> {{ $footerData->footer_drop2_18 ?? null }}</option>
              <option value="MXN"> {{ $footerData->footer_drop2_19 ?? null }}</option>
              <option value="NOK"> {{ $footerData->footer_drop2_20 ?? null }}</option>
              <option value="NZD"> {{ $footerData->footer_drop2_21 ?? null }}</option>
              <option value="PHP"> {{ $footerData->footer_drop2_22 ?? null }}</option>
              <option value="PLN"> {{ $footerData->footer_drop2_23 ?? null }}</option>
              <option value="RUB"> {{ $footerData->footer_drop2_24 ?? null }}</option>
              <option value="SEK"> {{ $footerData->footer_drop2_25 ?? null }}</option>
              <option value="SGD"> {{ $footerData->footer_drop2_26 ?? null }}</option>
              <option value="TWD"> {{ $footerData->footer_drop2_27 ?? null }}</option>
              <option value="USD" selected=""> {{ $footerData->footer_select2 ?? null }}</option>
              <option value="VND"> {{ $footerData->footer_drop2_28 ?? null }}</option>
              <option value="ZAR"> {{ $footerData->footer_drop2_29 ?? null }}</option>
            </select>
          </div>
        </div>
        <div class="col-md-9 ml-auto mr-auto col-sm-9 col-12">
          <div class="row">
            <div class="col-md-3 col-sm-3 col-6">
              <div class="links">
                <ul class="uppercase-links stacked-links">
                  <li>
                    <a href=" {{ $footerData->footer_text1_url ?? null }}">
                        {{ $footerData->footer_text1 ?? null }}
                    </a>
                  </li>
                  <li>
                    <a href=" {{ $footerData->footer_text2_url ?? null }}">
                        {{ $footerData->footer_text2 ?? null }}
                    </a>
                  </li>
                  <li>
                    <a href=" {{ $footerData->footer_text3_url ?? null }}">
                        {{ $footerData->footer_text3 ?? null }}
                    </a>
                  </li>
                </ul>
              </div>
            </div>
            <div class="col-md-3 col-sm-3 col-6">
              <div class="links">
                <ul class="uppercase-links stacked-links">
                  <li>
                    <a href="   {{ $footerData->footer_text4_url ?? null }}">
                        {{ $footerData->footer_text4 ?? null }}
                    </a>
                  </li>
                  <li>
                    <a href="   {{ $footerData->footer_text5_url ?? null }}">
                        {{ $footerData->footer_text5 ?? null }}
                    </a>
                  </li>
                  <li>
                    <a href="   {{ $footerData->footer_text6_url ?? null }}">
                        {{ $footerData->footer_text6 ?? null }}
                    </a>
                  </li>
                </ul>
              </div>
            </div>
            <div class="col-md-3 col-sm-3 col-6">
              <div class="links">
                <ul class="uppercase-links stacked-links">
                  <li>
                    <a href="{{ $footerData->footer_text7_url ?? null }}">
                        {{ $footerData->footer_text7 ?? null }}
                    </a>
                  </li>
                  <li>
                    <a href="{{ $footerData->footer_text8_url ?? null }}">
                        {{ $footerData->footer_text8 ?? null }}
                    </a>
                  </li>
                  <li>
                    <a href="{{ $footerData->footer_text9_url ?? null }}">
                        {{ $footerData->footer_text9 ?? null }}
                    </a>
                  </li>
                </ul>
              </div>
            </div>
            <div class="col-md-3 col-6">
              <div class="social-area">
                <a class="btn btn-just-icon btn-round btn-facebook">
                  <i class="{{ $footerData->footer_icon1 ?? null }}" aria-hidden="true"></i>
                </a>
                <a class="btn btn-just-icon btn-round btn-twitter">
                  <i class="{{ $footerData->footer_icon2 ?? null }}" aria-hidden="true"></i>
                </a>
                <a class="btn btn-just-icon btn-round btn-google">
                  <i class="{{ $footerData->footer_icon3 ?? null }}" aria-hidden="true"></i>
                </a>
                <a class="btn btn-just-icon btn-round btn-pinterest">
                  <i class="{{ $footerData->footer_icon4 ?? null }}" aria-hidden="true"></i>
                </a>
              </div>
            </div>
          </div>
          <hr />
          <div class="copyright">
            <div class="pull-left">
                {{ $footerData->footer_TextA ?? null }} <script>
                  {{ $footerData->footer_TextB ?? null }}
              </script>   {{ $footerData->footer_TextC ?? null }}
            </div>
            <div class="links pull-right">
              <ul>
                <li>
                  <a href=" {{ $footerData->footer_text10_url ?? null }}">
                    {{ $footerData->footer_text10 ?? null }}
                  </a>
                </li>
                |
                <li>
                  <a href=" {{ $footerData->footer_text11_url ?? null }}">
                    {{ $footerData->footer_text11 ?? null }}
                  </a>
                </li>
                |
                <li>
                  <a href=" {{ $footerData->footer_text12_url ?? null }}">
                    {{ $footerData->footer_text12 ?? null }}
                  </a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </footer>



