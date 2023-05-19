<?php
$onhover = 'text-emerald-500 hover:text-emerald-600';
$nohover = 'hover:text-emerald-500';
?>


<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    <!-- Styles -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="antialiased ">


    <header
        class="relative z-20 w-full border-b shadow-lg border-b-1 border-slate-200 bg-white/90 shadow-slate-700/5 after:absolute after:top-full after:left-0 after:z-10 after:block after:h-px after:w-full after:bg-slate-200 lg:border-slate-200 lg:backdrop-blur-sm lg:after:hidden">
        <div class="relative mx-auto max-w-full px-6 lg:max-w-5xl xl:max-w-7xl 2xl:max-w-[96rem] text-slate-900">
            <nav aria-label="main navigation"
                class="flex h-[5.5rem] items-stretch justify-between font-medium text-slate-700" role="navigation">
                <!-- Brand logo -->
                <a id="WindUI" aria-label="WindUI logo" aria-current="page"
                    class="flex items-center gap-2 py-3 text-lg whitespace-nowrap focus:outline-none lg:flex-1"
                    href="/">
                    <img class="h-[50px]" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAdoAAABqCAMAAAAsh2BcAAAAyVBMVEX///8AFTMA4WUAETEAACkAAB0AACQAACDHyc5bY3IAABoAFDacoKgAACIAACYA4GDu7/GytrwABiwAABXd3+JzeYVSWWkADS8AABcAABGNkZr4+fobKkQAAA4AACz2/vrp6uwAAACmqrHv/fVnbXoo43K+wccA31d+g42Slp/P0dUkL0ZVXGutsLf5//xJUGA4QFIuOE0y5HfX+eQNHjo+Rljn++6Z8Lhw65w/5X9U54pl6ZMeK0MKHDnW2dzL99um8sKE7quz88lcTgFJAAAPn0lEQVR4nO1daWPiOBLF8RUcTMAc5grtod2EK03ohZnt7YSZ3f//oxZjY6qkKtuA6Z4wfl+mx7EsqZ6eVJJKolQqUKDA7eNls/abv7oQBa4Av+G4WuP+VxejQO5YmMoOanf8qwtSIGf4e2Z33FqFbm8Li4jZQre3Bt9WYqidgtvbwQIwW+j2llBGzBa6vR20TEVAodvbQPM3kdkdt436ry5WgctRMWRqd9z+w3RbrwDcyprcyCao3fXJ/yzdti0jxm+3MrX3iA75n6fbsnasun4r1JYqDZrb3HU7ABj2c/74hbhNaku9LqPbnLl9cGOojYLaa+KPb1/+/Tn4x7TzU3T7oB6/bRXUXhHfnx/vHh//FfxzyvTJ+eq2oPYn4fvjXYBkbnPVbUHtz8G3kNm7u+efxm1B7c/A15jZFN0qTy+5ZVpQ+xPw9fuR2YNumTmQkt94W1B7fUDN7nX7Z/C0Qs+BlG5eui2ovTpEZne6DbnldJsTtwW1V4fE7I7b34M/VJ6uqtuC2itD1mzQJf9n/7cKvXaRE7cFtVcGxewO4R9Z3ebhSxXUXhWfvtDMRtSyun0aXZ53Qe1VwWj28cfhBc5PzmEOVFB7RXCafbz7HL8z4tYuLtZtQe31QHpQAbOPn8FbrG4v9aUoar16r7x8fV36lVk2srcvkzBBr+5lzLcZJSlP6mxoTCZqa/eV1mLzumn703EtU2FHrfY+45fTY3Jq44NltukvZ9FsgBdu7eJC3UrU9itvulkdOq7raIZltlPjOsblqmVrWpBgWDV1dZJe63t/aEV5BEmGPs1bOrVeb2DqRpB3UFrdHEy95Jy3ftXav+9omq27vX1jaAH4cfO498HTSvCk/qrrsWW0SUpWrGYFZhPWLi7jVqR2NLRd8HXV6awSu8LR2tJUWB5V626SO8/6vCMmaayoFpRG7XbRrcLCKoprNFoen/N22UU5q0ajt3usVLUY3Zjaevf4VG/tqH6zkGWqVi+pll8zajbACzcHuohbRG2ptrFU8ftup812dGPVlN5XFKez4fu62cBy5SSuNZ9JryZTW1s0NPlDitaYcFm3uo70uj1olgagDuaRWhAKrrVKk65UbHvgsdXM2huHqFhETZQLuYXUGt6aMpaiDWkZ9v0uQWwAh/XvJk8EsQHcriSCRGrrOlnWwOIrsmF5b1QEsOLq21U6tZMeNQF1dK4Jn6LZAKMr6BZS+75mzE7vEHvvVca4O1htKrf+iozCjay6EZy2JGpbDaZVBRbvyD1AaavLkg0rp6xhIUhq1Te6Hbm2R1r1M8fsF5rZHbeMbp8qTIJ0PKCxh7UWsUM8M5iGEMIQidrBWw+Tkmhr3PMnUFvWkz5EBPVuqZEjehv+D00taxlnThn1VM0G4HR7vi/1wNOJ0BWF4NmJzCpK9VXMq+8ywokNNUDNgafWl45EYahdoaf0eGYxGGr59wlf6nTNBnjh1i7O1W1WalXDQ+lqwxRmd9yKffJbCrOKMkQiYKntMb0XKK6GO4BVatYRTqVWaWC7lE71oI4YcWsXZ3KblVpFW6J0S86JAbBwmXzSjcEwoHvLUTtj+i5UXNSuJglDPMbJ1FZF2fKa/ZTCRZ3h9kzdZqZW6cDhtpI41h3QhasXY6bDwYCjJEftu9hhuLuppyhLWNxmhrYQ4WRqVQcb9FzNBshXtwS1qmPYpl0VbaWqx1Q1afqruo7jig8dONwOMyVx18cUDLVTLEHH0jd+y1/qFioxNPlSrItbtU3T0IhmnUCtaliNbqMjeo/4DpnzNbvPk1tzPIdbiVrVri6m9fFLb6kLcxvz6Ku1hD9plvu6aK8MXaz2UYMCIYqmD1ft9koT5yTmsRY0tf0qKrLVPjh4s7YO/3Is7kzoLzR91RuN6xXfFcubRG1VnW5rtVpzNMADiwbHkEs0G4BbTz5HtyK1mlE5eKnepIFq7r4dEtVwAdyuH+4j1MavHfQ9IFusT7e7uN8n6Y+XeIYKOgeaWnRAFZ+leIG5H/VfRlMutXG8P6++Fsd/ltpgrTHCBC1fuKtjAS7T7D5XZhWoMc34gSMEao0FnH54b8gojYM+eki01ZV3THKP50Rxkhc0OGsDMArPVCRcPSaLphatq+h4TraFg2onSlJDWbtVlKQlONsctci/Q56GasbPP99dyuwuW2Yt5vQ+GVMrzlf6A2jHuOvBT7Hr3ETy1A5tfQPpc+ZoalJDs6Jh+fCcpHYLe1dTrC/s9g9547UHQ5jx9rBDyFDr4qUJVBvdi55ertl9vnnpFlHrSmsrHjSkGnVxTdghuQMhSRMleQgf1qCcVFdYqPLQ8BlHBJDUwh5DfZfqA1rdoWtH/bF8kQ+exjHU6jjZGLYHK2oseWh2n3FOukXU6vLW2gT2vVG90WhnSeu1PTh+dcJ630Nb6NKK9Asy44FFkto2EIwhL8K9gMxNb/8IOsLHLiGGh0ZOjlq8AtKHf4uozYvZgFuR1RAn6hZSKwlwh5oNXojs6wOTO/I2QN+AOykhjVBrVDZruAF1qAFJ7Tt4U5v0RExgmn1LRdRRGwctKFuaWncjpFmBISmkluuN705mdpc1F598km4fKJtCLIBK7FAlcKg1iT10aKtosWYBHhlEASH1sbIoamtoDqVVRUCawoxghwHn5kdDQgnS1A59IQ2cKYfUMjEV0UGBE9Fi1vqeMsTtxIDU6kSTRvccVUM/CvYX8hLqrlME5o94moPW0CHKB+0fj/gUtc3U5eMjQrdvJJcGw4ODBbsVj9EWqf3zmWY2OidwImZMLatsmAEBSC1FE/IYwhr24azWJpJAnpzQf4a7YgYRSwd7zVhaFLX3mVY4o+LutYbaJhXz0lezRFlgSNT+xYj28b+87Xl4TI+sUU2TQ2qw6hY0oNBW0GsmfFSsrGiUAjMi1SGy6cNeU4seUtSOT6F2b4gpoJbwu3bIFECDkV21P0pngFu/liZ7SUildiZRW4PUKkSSbSK1Siq1h9XfK1BLmiYPakucF/WcbYURY0XvmLrirDER6R2yVEPUIetEEqJDhn6tSZQPTpXj5vKzOmQnD2rzm/vsnE46Mskdeqd85UGe22BMZctA63aIwK8RSBKaF08WCG8NNqB4UZZ0o5hRiELodECnzlkQNUSe2dnUln5/5Lj9ylqfxoLe2HaHp8XEQ2rJNg3dfDvcA4Xurk0ExPlg+SeaUBGPEOB0VDvMNMjJT4b9/Lhs+5F1Rg3jEHU4nzqf2tx022aY1byTPoOoVYfy3z3YpCO9wVmXK0VAlWpQWNG8F/aKVDZwpTEeEMkliwFaGbWTEF7ZibxNqmOCM/dLqC39ngu3HLOqd8JHAqCFRlOOW0STZzus9wtaaJTWLFCSaPy+hy3ElpwZ2OsfO2ySWkiE1urXEhDZAg6ljristOuP0Q7lJdSWPufQJy+53tjL/IkIOFjVFc8JzGC9D2sJSMlqVUiDAmUOe7zI9VJNYdCYQWEdO02SWnRVdCPLAS7U1HSpWc2RN3oRtQm6zcoto1nnZM2Km3rOCnuvTRT1Eo/FyBrCDt09CguNl09Qr+c6Hp/L0YwktUhkxBRedr/xfEn8zSQhGO8yai/WLaNZBxssG4SteO0NCmqM44Di4N4KWsh1hqBPnuIdqTjJGC2duTZYOxjhQ0BH29Nb8WjOZ4o2n2qSX4e2KxQVxaL0N4ItL6T2wvGW8Y3P0awcQON240OU92VM09Fj6qMgJEXtbOrNnVr6s4qKI6BAyOgb4k/VV6N9ku1ogD8G9oxpautIhPYSGrbZtnaFEdeofbzYrr+OI2k3p4a4Dn8ptQlzoHRuOc2exSwR0ahZg/KkN1mqllBtGMMmlMGxLWe91ixD+FrjaOWRsNbg2tZwvR5aUoDgUXVMRCOOsnKsdnRe26u390V2Or4wrAj7n66uLVu9nj+XypsDtfwc6Fsat9w4q3gpCWlQcciqVq1qjvgHGILRlyJPFVVV5VYCN3PfpMUzKgmcTDHUiiefHLthvc8HRtc82FvT8dTZF7WpursqkucfLqc2YX6bPN5ymlW8xGQssoeYP0H/gwsEwAZEsQkzJg4TA0alcyHmxCkP1UWtRLXXcE7mXRpifhK1Z+qWY/bdSySQR2Zqq3g3OsspD+GCnF6G5V90loSj1pPPd0tw0ZCb7bBDgDyoTdAtTwTHrDQfzYys1LqKMKuYpx760UV7LBPO44YwUDgOe5yrnkGFbhxouM86wxGlPXKhNoFbbh9oQ9vGWZ/NbFZqVemMcG2dcvjNFINOSqXXFANXcdwrfwiTuygaFBgfWO+nlTYudS7Unqzb/DUrBquyhurKa6+190SidCIgoP+a2I3bwnp0wtHp6VNyk3TFAntDllvkcedE7Yl7Ba/5a1a48GDDkOWaVLhVf8mPYKp8M8UePj9Mqg3RfkkXHtStJBlq8v4Xc09HsAL3lsd+rQjel5L9ZGakch4uYRZRa/ZfyXOo9ptHJ+4RV7rsUTW466YqHcbCmi4FtyReU9Jc6VwrUa0lYZP+kmxWmlubX4Na/izBncgtp9nBRcwKlwuVWg2pUx52+TC65qZDTES0RosP9KDvBBo2fLkeKfdGCVdcHeAaQ+YKvJFeFcndtYJ+PgE0MrLOgTjNvl/GbEmzwU8S7ggZr9B9XarRKSfu7Y+XDbye5JiGnxwNMFsIS1CObZWpONnUn0uszBvCnWCq1hlM2XZVa9moNTj6e9AKVBPkE9vz5bfj04YUhwyLxlWXP5EJdXsF3zgE/B3RcAnn3jeDi/mGQ61qWkrPS/uCN51buhEmsC19OUoPzapVXuMkhq5vRnQt4I+cTmn7bXtzXber+09phm4pLaqNwJznlhnkHLytL8OJN7JBXPrtFDwWx5cXmITlgO2Tv8Wv9K/GLIn+bDTxd+hlvaCyNq7sE0xGGe/rDG7NHB2SXFiH2mzU8/efqoy9DO9742lr//b99S+S5XT7/MfhDY7ZS3vjAtcGo9vDmYI+50G9Fcz+7fGJ9KUO1DKa1QrNfgSQun3+a/+3FT0R1OYFsx8ChG4j0TIrROJ9hgX+tpB8qcfvweM+s6I+nP/NfiegAA+hTw41yzJbaPYjAek2hdlCsx8LgNuwN+Y8qOGgYPaDIb4hOdIsx2yh2Y+HSLeRb8zOegpmPyC+fnl+fHxO1GzB7EfFXz9+/C/4b8HsraJg9mbBzHq0VcHsBwfzqy+FZj8+FqRoC83eAMrUTx0Vmr0FUFdraq8Fs7cA+aCARv7EV4GPh7b4mxyFZm8G+JKFYpy9JcDj7xrxs5IFPi6Oui1mPbeGw1UzmnxFWYEPjtBPLjR7i1g0tKElX3BZ4AZQL5cv+CH4AgUKXIb/A5JQXfgphlX3AAAAAElFTkSuQmCC" alt="boolean">

                </a>
                <!-- Mobile trigger -->
                <button class="relative self-center order-10 visible block w-10 h-10 opacity-100 lg:hidden"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <div class="absolute w-6 transform -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2">
                        <span aria-hidden="true"
                            class="absolute block h-0.5 w-9/12 -translate-y-2 transform rounded-full bg-slate-900 transition-all duration-300"></span>
                        <span aria-hidden="true"
                            class="absolute block h-0.5 w-6 transform rounded-full bg-slate-900 transition duration-300"></span>
                        <span aria-hidden="true"
                            class="absolute block h-0.5 w-1/2 origin-top-left translate-y-2 transform rounded-full bg-slate-900 transition-all duration-300"></span>
                    </div>
                </button>
                <!-- Navigation links -->
                <ul role="menubar" aria-label="Select page"
                    class="invisible absolute top-0 left-0 z-[-1] ml-auto h-screen w-full justify-center overflow-hidden overflow-y-auto overscroll-contain bg-white/90 px-8 pb-12 pt-28 font-medium opacity-0 transition-[opacity,visibility] duration-300 lg:visible lg:relative lg:top-0 lg:z-0 lg:flex lg:h-full lg:w-auto lg:items-stretch lg:overflow-visible lg:bg-white/0 lg:px-0 lg:py-0 lg:pt-0 lg:opacity-100">
                    <li role="none" class="flex items-stretch">
                        <a role="menuitem" aria-current="page" aria-haspopup="false" tabindex="0"
                            class="flex items-center gap-2 py-4 transition-colors duration-300 @if(request()->is('/')) {{$onhover}} @else {{$nohover}} @endif focus:bg-emerald-50 focus:outline-none focus-visible:outline-none lg:px-8"
                            href="/"> <span>Home</span> </a>
                    </li>
                    <li role="none" class="flex items-stretch">
                        <a role="menuitem" aria-haspopup="false" tabindex="0"
                            class="flex items-center gap-2 py-4 transition-colors duration-300  @if(request()->is('*features')) {{$onhover}} @else {{$nohover}} @endif focus:bg-emerald-50 focus:outline-none focus-visible:outline-none lg:px-8"
                            href="/features"> <span>Features</span></a>
                    </li>
                    <li role="none" class="flex items-stretch">
                        <a role="menuitem" aria-haspopup="false" tabindex="0"
                            class="flex items-center gap-2 py-4 transition-colors duration-300  @if(request()->is('*pricing')) {{$onhover}} @else {{$nohover}} @endif focus:bg-emerald-50 focus:outline-none focus-visible:outline-none lg:px-8"
                            href="/pricing"> <span>Pricing</span> </a>
                    </li>
                    <li role="none" class="flex items-stretch">
                        <a role="menuitem" aria-haspopup="false" tabindex="0"
                            class="flex items-center gap-2 py-4 transition-colors duration-300  @if(request()->is('*about')) {{$onhover}} @else {{$nohover}} @endif focus:bg-emerald-50 focus:outline-none focus-visible:outline-none lg:px-8"
                            href="/about"> <span>About</span> </a>
                    </li>
                </ul>
            </nav>
        </div>
    </header>

</html>
