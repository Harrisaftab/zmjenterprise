<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- ========== Meta Tags ========== -->
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="author" content="modinatheme">
        <!-- ======== Page title ============ -->
        <title>ZMJ- Construction</title>
        <!--<< Favicon >>-->
        <link rel="shortcut icon" href="public/assets/img/icon/icon-2.png">
        <!--<< Bootstrap min.css >>-->
        <link rel="stylesheet" href="public/assets/css/bootstrap.min.css">
        <!--<< Font Awesome.css >>-->
        <link rel="stylesheet" href="public/assets/css/font-awesome.css">
        <!--<< Animate.css >>-->
        <link rel="stylesheet" href="public/assets/css/animate.css">
        <!--<< Magnific Popup.css >>-->
        <link rel="stylesheet" href="public/assets/css/magnific-popup.css">
        <!--<< MeanMenu.css >>-->
        <link rel="stylesheet" href="public/assets/css/meanmenu.css">
        <!--<< Swiper Bundle.css >>-->
        <link rel="stylesheet" href="public/assets/css/swiper-bundle.min.css">
        <!--<< Nice Select.css >>-->
        <link rel="stylesheet" href="public/assets/css/nice-select.css">
        <!--<< Main.css >>-->
        <link rel="stylesheet" href="public/assets/css/main.css">
        <!--<< Style.css >>-->
        <link rel="stylesheet" href="style.css">
        <!-- template main style css file -->
        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />
        <!-- Styles / Scripts -->
        @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
            @vite(['resources/css/app.css', 'resources/js/app.js'])
        @else
            <style>
                /*! tailwindcss v4.0.7 | MIT License | https://tailwindcss.com */@layer theme{:root,:host{--font-sans:'Instrument Sans',ui-sans-serif,system-ui,sans-serif,"Apple Color Emoji","Segoe UI Emoji","Segoe UI Symbol","Noto Color Emoji";--font-serif:ui-serif,Georgia,Cambria,"Times New Roman",Times,serif;--font-mono:ui-monospace,SFMono-Regular,Menlo,Monaco,Consolas,"Liberation Mono","Courier New",monospace;--color-red-50:oklch(.971 .013 17.38);--color-red-100:oklch(.936 .032 17.717);--color-red-200:oklch(.885 .062 18.334);--color-red-300:oklch(.808 .114 19.571);--color-red-400:oklch(.704 .191 22.216);--color-red-500:oklch(.637 .237 25.331);--color-red-600:oklch(.577 .245 27.325);--color-red-700:oklch(.505 .213 27.518);--color-red-800:oklch(.444 .177 26.899);--color-red-900:oklch(.396 .141 25.723);--color-red-950:oklch(.258 .092 26.042);--color-orange-50:oklch(.98 .016 73.684);--color-orange-100:oklch(.954 .038 75.164);--color-orange-200:oklch(.901 .076 70.697);--color-orange-300:oklch(.837 .128 66.29);--color-orange-400:oklch(.75 .183 55.934);--color-orange-500:oklch(.705 .213 47.604);--color-orange-600:oklch(.646 .222 41.116);--color-orange-700:oklch(.553 .195 38.402);--color-orange-800:oklch(.47 .157 37.304);--color-orange-900:oklch(.408 .123 38.172);--color-orange-950:oklch(.266 .079 36.259);--color-amber-50:oklch(.987 .022 95.277);--color-amber-100:oklch(.962 .059 95.617);--color-amber-200:oklch(.924 .12 95.746);--color-amber-300:oklch(.879 .169 91.605);--color-amber-400:oklch(.828 .189 84.429);--color-amber-500:oklch(.769 .188 70.08);--color-amber-600:oklch(.666 .179 58.318);--color-amber-700:oklch(.555 .163 48.998);--color-amber-800:oklch(.473 .137 46.201);--color-amber-900:oklch(.414 .112 45.904);--color-amber-950:oklch(.279 .077 45.635);--color-yellow-50:oklch(.987 .026 102.212);--color-yellow-100:oklch(.973 .071 103.193);--color-yellow-200:oklch(.945 .129 101.54);--color-yellow-300:oklch(.905 .182 98.111);--color-yellow-400:oklch(.852 .199 91.936);--color-yellow-500:oklch(.795 .184 86.047);--color-yellow-600:oklch(.681 .162 75.834);--color-yellow-700:oklch(.554 .135 66.442);--color-yellow-800:oklch(.476 .114 61.907);--color-yellow-900:oklch(.421 .095 57.708);--color-yellow-950:oklch(.286 .066 53.813);--color-lime-50:oklch(.986 .031 120.757);--color-lime-100:oklch(.967 .067 122.328);--color-lime-200:oklch(.938 .127 124.321);--color-lime-300:oklch(.897 .196 126.665);--color-lime-400:oklch(.841 .238 128.85);--color-lime-500:oklch(.768 .233 130.85);--color-lime-600:oklch(.648 .2 131.684);--color-lime-700:oklch(.532 .157 131.589);--color-lime-800:oklch(.453 .124 130.933);--color-lime-900:oklch(.405 .101 131.063);--color-lime-950:oklch(.274 .072 132.109);--color-green-50:oklch(.982 .018 155.826);--color-green-100:oklch(.962 .044 156.743);--color-green-200:oklch(.925 .084 155.995);--color-green-300:oklch(.871 .15 154.449);--color-green-400:oklch(.792 .209 151.711);--color-green-500:oklch(.723 .219 149.579);--color-green-600:oklch(.627 .194 149.214);--color-green-700:oklch(.527 .154 150.069);--color-green-800:oklch(.448 .119 151.328);--color-green-900:oklch(.393 .095 152.535);--color-green-950:oklch(.266 .065 152.934);--color-emerald-50:oklch(.979 .021 166.113);--color-emerald-100:oklch(.95 .052 163.051);--color-emerald-200:oklch(.905 .093 164.15);--color-emerald-300:oklch(.845 .143 164.978);--color-emerald-400:oklch(.765 .177 163.223);--color-emerald-500:oklch(.696 .17 162.48);--color-emerald-600:oklch(.596 .145 163.225);--color-emerald-700:oklch(.508 .118 165.612);--color-emerald-800:oklch(.432 .095 166.913);--color-emerald-900:oklch(.378 .077 168.94);--color-emerald-950:oklch(.262 .051 172.552);--color-teal-50:oklch(.984 .014 180.72);--color-teal-100:oklch(.953 .051 180.801);--color-teal-200:oklch(.91 .096 180.426);--color-teal-300:oklch(.855 .138 181.071);--color-teal-400:oklch(.777 .152 181.912);--color-teal-500:oklch(.704 .14 182.503);--color-teal-600:oklch(.6 .118 184.704);--color-teal-700:oklch(.511 .096 186.391);--color-teal-800:oklch(.437 .078 188.216);--color-teal-900:oklch(.386 .063 188.416);--color-teal-950:oklch(.277 .046 192.524);--color-cyan-50:oklch(.984 .019 200.873);--color-cyan-100:oklch(.956 .045 203.388);--color-cyan-200:oklch(.917 .08 205.041);--color-cyan-300:oklch(.865 .127 207.078);--color-cyan-400:oklch(.789 .154 211.53);--color-cyan-500:oklch(.715 .143 215.221);--color-cyan-600:oklch(.609 .126 221.723);--color-cyan-700:oklch(.52 .105 223.128);--color-cyan-800:oklch(.45 .085 224.283);--color-cyan-900:oklch(.398 .07 227.392);--color-cyan-950:oklch(.302 .056 229.695);--color-sky-50:oklch(.977 .013 236.62);--color-sky-100:oklch(.951 .026 236.824);--color-sky-200:oklch(.901 .058 230.902);--color-sky-300:oklch(.828 .111 230.318);--color-sky-400:oklch(.746 .16 232.661);--color-sky-500:oklch(.685 .169 237.323);--color-sky-600:oklch(.588 .158 241.966);--color-sky-700:oklch(.5 .134 242.749);--color-sky-800:oklch(.443 .11 240.79);--color-sky-900:oklch(.391 .09 240.876);--color-sky-950:oklch(.293 .066 243.157);--color-blue-50:oklch(.97 .014 254.604);--color-blue-100:oklch(.932 .032 255.585);--color-blue-200:oklch(.882 .059 254.128);--color-blue-300:oklch(.809 .105 251.813);--color-blue-400:oklch(.707 .165 254.624);--color-blue-500:oklch(.623 .214 259.815);--color-blue-600:oklch(.546 .245 262.881);--color-blue-700:oklch(.488 .243 264.376);--color-blue-800:oklch(.424 .199 265.638);--color-blue-900:oklch(.379 .146 265.522);--color-blue-950:oklch(.282 .091 267.935);--color-indigo-50:oklch(.962 .018 272.314);--color-indigo-100:oklch(.93 .034 272.788);--color-indigo-200:oklch(.87 .065 274.039);--color-indigo-300:oklch(.785 .115 274.713);--color-indigo-400:oklch(.673 .182 276.935);--color-indigo-500:oklch(.585 .233 277.117);--color-indigo-600:oklch(.511 .262 276.966);--color-indigo-700:oklch(.457 .24 277.023);--color-indigo-800:oklch(.398 .195 277.366);--color-indigo-900:oklch(.359 .144 278.697);--color-indigo-950:oklch(.257 .09 281.288);--color-violet-50:oklch(.969 .016 293.756);--color-violet-100:oklch(.943 .029 294.588);--color-violet-200:oklch(.894 .057 293.283);--color-violet-300:oklch(.811 .111 293.571);--color-violet-400:oklch(.702 .183 293.541);--color-violet-500:oklch(.606 .25 292.717);--color-violet-600:oklch(.541 .281 293.009);--color-violet-700:oklch(.491 .27 292.581);--color-violet-800:oklch(.432 .232 292.759);--color-violet-900:oklch(.38 .189 293.745);--color-violet-950:oklch(.283 .141 291.089);--color-purple-50:oklch(.977 .014 308.299);--color-purple-100:oklch(.946 .033 307.174);--color-purple-200:oklch(.902 .063 306.703);--color-purple-300:oklch(.827 .119 306.383);--color-purple-400:oklch(.714 .203 305.504);--color-purple-500:oklch(.627 .265 303.9);--color-purple-600:oklch(.558 .288 302.321);--color-purple-700:oklch(.496 .265 301.924);--color-purple-800:oklch(.438 .218 303.724);--color-purple-900:oklch(.381 .176 304.987);--color-purple-950:oklch(.291 .149 302.717);--color-fuchsia-50:oklch(.977 .017 320.058);--color-fuchsia-100:oklch(.952 .037 318.852);--color-fuchsia-200:oklch(.903 .076 319.62);--color-fuchsia-300:oklch(.833 .145 321.434);--color-fuchsia-400:oklch(.74 .238 322.16);--color-fuchsia-500:oklch(.667 .295 322.15);--color-fuchsia-600:oklch(.591 .293 322.896);--color-fuchsia-700:oklch(.518 .253 323.949);--color-fuchsia-800:oklch(.452 .211 324.591);--color-fuchsia-900:oklch(.401 .17 325.612);--color-fuchsia-950:oklch(.293 .136 325.661);--color-pink-50:oklch(.971 .014 343.198);--color-pink-100:oklch(.948 .028 342.258);--color-pink-200:oklch(.899 .061 343.231);--color-pink-300:oklch(.823 .12 346.018);--color-pink-400:oklch(.718 .202 349.761);--color-pink-500:oklch(.656 .241 354.308);--color-pink-600:oklch(.592 .249 .584);--color-pink-700:oklch(.525 .223 3.958);--color-pink-800:oklch(.459 .187 3.815);--color-pink-900:oklch(.408 .153 2.432);--color-pink-950:oklch(.284 .109 3.907);--color-rose-50:oklch(.969 .015 12.422);--color-rose-100:oklch(.941 .03 12.58);--color-rose-200:oklch(.892 .058 10.001);--color-rose-300:oklch(.81 .117 11.638);--color-rose-400:oklch(.712 .194 13.428);--color-rose-500:oklch(.645 .246 16.439);--color-rose-600:oklch(.586 .253 17.585);--color-rose-700:oklch(.514 .222 16.935);--color-rose-800:oklch(.455 .188 13.697);--color-rose-900:oklch(.41 .159 10.272);--color-rose-950:oklch(.271 .105 12.094);--color-slate-50:oklch(.984 .003 247.858);--color-slate-100:oklch(.968 .007 247.896);--color-slate-200:oklch(.929 .013 255.508);--color-slate-300:oklch(.869 .022 252.894);--color-slate-400:oklch(.704 .04 256.788);--color-slate-500:oklch(.554 .046 257.417);--color-slate-600:oklch(.446 .043 257.281);--color-slate-700:oklch(.372 .044 257.287);--color-slate-800:oklch(.279 .041 260.031);--color-slate-900:oklch(.208 .042 265.755);--color-slate-950:oklch(.129 .042 264.695);--color-gray-50:oklch(.985 .002 247.839);--color-gray-100:oklch(.967 .003 264.542);--color-gray-200:oklch(.928 .006 264.531);--color-gray-300:oklch(.872 .01 258.338);--color-gray-400:oklch(.707 .022 261.325);--color-gray-500:oklch(.551 .027 264.364);--color-gray-600:oklch(.446 .03 256.802);--color-gray-700:oklch(.373 .034 259.733);--color-gray-800:oklch(.278 .033 256.848);--color-gray-900:oklch(.21 .034 264.665);--color-gray-950:oklch(.13 .028 261.692);--color-zinc-50:oklch(.985 0 0);--color-zinc-100:oklch(.967 .001 286.375);--color-zinc-200:oklch(.92 .004 286.32);--color-zinc-300:oklch(.871 .006 286.286);--color-zinc-400:oklch(.705 .015 286.067);--color-zinc-500:oklch(.552 .016 285.938);--color-zinc-600:oklch(.442 .017 285.786);--color-zinc-700:oklch(.37 .013 285.805);--color-zinc-800:oklch(.274 .006 286.033);--color-zinc-900:oklch(.21 .006 285.885);--color-zinc-950:oklch(.141 .005 285.823);--color-neutral-50:oklch(.985 0 0);--color-neutral-100:oklch(.97 0 0);--color-neutral-200:oklch(.922 0 0);--color-neutral-300:oklch(.87 0 0);--color-neutral-400:oklch(.708 0 0);--color-neutral-500:oklch(.556 0 0);--color-neutral-600:oklch(.439 0 0);--color-neutral-700:oklch(.371 0 0);--color-neutral-800:oklch(.269 0 0);--color-neutral-900:oklch(.205 0 0);--color-neutral-950:oklch(.145 0 0);--color-stone-50:oklch(.985 .001 106.423);--color-stone-100:oklch(.97 .001 106.424);--color-stone-200:oklch(.923 .003 48.717);--color-stone-300:oklch(.869 .005 56.366);--color-stone-400:oklch(.709 .01 56.259);--color-stone-500:oklch(.553 .013 58.071);--color-stone-600:oklch(.444 .011 73.639);--color-stone-700:oklch(.374 .01 67.558);--color-stone-800:oklch(.268 .007 34.298);--color-stone-900:oklch(.216 .006 56.043);--color-stone-950:oklch(.147 .004 49.25);--color-black:#000;--color-white:#fff;--spacing:.25rem;--breakpoint-sm:40rem;--breakpoint-md:48rem;--breakpoint-lg:64rem;--breakpoint-xl:80rem;--breakpoint-2xl:96rem;--container-3xs:16rem;--container-2xs:18rem;--container-xs:20rem;--container-sm:24rem;--container-md:28rem;--container-lg:32rem;--container-xl:36rem;--container-2xl:42rem;--container-3xl:48rem;--container-4xl:56rem;--container-5xl:64rem;--container-6xl:72rem;--container-7xl:80rem;--text-xs:.75rem;--text-xs--line-height:calc(1/.75);--text-sm:.875rem;--text-sm--line-height:calc(1.25/.875);--text-base:1rem;--text-base--line-height: 1.5 ;--text-lg:1.125rem;--text-lg--line-height:calc(1.75/1.125);--text-xl:1.25rem;--text-xl--line-height:calc(1.75/1.25);--text-2xl:1.5rem;--text-2xl--line-height:calc(2/1.5);--text-3xl:1.875rem;--text-3xl--line-height: 1.2 ;--text-4xl:2.25rem;--text-4xl--line-height:calc(2.5/2.25);--text-5xl:3rem;--text-5xl--line-height:1;--text-6xl:3.75rem;--text-6xl--line-height:1;--text-7xl:4.5rem;--text-7xl--line-height:1;--text-8xl:6rem;--text-8xl--line-height:1;--text-9xl:8rem;--text-9xl--line-height:1;--font-weight-thin:100;--font-weight-extralight:200;--font-weight-light:300;--font-weight-normal:400;--font-weight-medium:500;--font-weight-semibold:600;--font-weight-bold:700;--font-weight-extrabold:800;--font-weight-black:900;--tracking-tighter:-.05em;--tracking-tight:-.025em;--tracking-normal:0em;--tracking-wide:.025em;--tracking-wider:.05em;--tracking-widest:.1em;--leading-tight:1.25;--leading-snug:1.375;--leading-normal:1.5;--leading-relaxed:1.625;--leading-loose:2;--radius-xs:.125rem;--radius-sm:.25rem;--radius-md:.375rem;--radius-lg:.5rem;--radius-xl:.75rem;--radius-2xl:1rem;--radius-3xl:1.5rem;--radius-4xl:2rem;--shadow-2xs:0 1px #0000000d;--shadow-xs:0 1px 2px 0 #0000000d;--shadow-sm:0 1px 3px 0 #0000001a,0 1px 2px -1px #0000001a;--shadow-md:0 4px 6px -1px #0000001a,0 2px 4px -2px #0000001a;--shadow-lg:0 10px 15px -3px #0000001a,0 4px 6px -4px #0000001a;--shadow-xl:0 20px 25px -5px #0000001a,0 8px 10px -6px #0000001a;--shadow-2xl:0 25px 50px -12px #00000040;--inset-shadow-2xs:inset 0 1px #0000000d;--inset-shadow-xs:inset 0 1px 1px #0000000d;--inset-shadow-sm:inset 0 2px 4px #0000000d;--drop-shadow-xs:0 1px 1px #0000000d;--drop-shadow-sm:0 1px 2px #00000026;--drop-shadow-md:0 3px 3px #0000001f;--drop-shadow-lg:0 4px 4px #00000026;--drop-shadow-xl:0 9px 7px #0000001a;--drop-shadow-2xl:0 25px 25px #00000026;--ease-in:cubic-bezier(.4,0,1,1);--ease-out:cubic-bezier(0,0,.2,1);--ease-in-out:cubic-bezier(.4,0,.2,1);--animate-spin:spin 1s linear infinite;--animate-ping:ping 1s cubic-bezier(0,0,.2,1)infinite;--animate-pulse:pulse 2s cubic-bezier(.4,0,.6,1)infinite;--animate-bounce:bounce 1s infinite;--blur-xs:4px;--blur-sm:8px;--blur-md:12px;--blur-lg:16px;--blur-xl:24px;--blur-2xl:40px;--blur-3xl:64px;--perspective-dramatic:100px;--perspective-near:300px;--perspective-normal:500px;--perspective-midrange:800px;--perspective-distant:1200px;--aspect-video:16/9;--default-transition-duration:.15s;--default-transition-timing-function:cubic-bezier(.4,0,.2,1);--default-font-family:var(--font-sans);--default-font-feature-settings:var(--font-sans--font-feature-settings);--default-font-variation-settings:var(--font-sans--font-variation-settings);--default-mono-font-family:var(--font-mono);--default-mono-font-feature-settings:var(--font-mono--font-feature-settings);--default-mono-font-variation-settings:var(--font-mono--font-variation-settings)}}@layer base{*,:after,:before,::backdrop{box-sizing:border-box;border:0 solid;margin:0;padding:0}::file-selector-button{box-sizing:border-box;border:0 solid;margin:0;padding:0}html,:host{-webkit-text-size-adjust:100%;-moz-tab-size:4;tab-size:4;line-height:1.5;font-family:var(--default-font-family,ui-sans-serif,system-ui,sans-serif,"Apple Color Emoji","Segoe UI Emoji","Segoe UI Symbol","Noto Color Emoji");font-feature-settings:var(--default-font-feature-settings,normal);font-variation-settings:var(--default-font-variation-settings,normal);-webkit-tap-highlight-color:transparent}body{line-height:inherit}hr{height:0;color:inherit;border-top-width:1px}abbr:where([title]){-webkit-text-decoration:underline dotted;text-decoration:underline dotted}h1,h2,h3,h4,h5,h6{font-size:inherit;font-weight:inherit}a{color:inherit;-webkit-text-decoration:inherit;text-decoration:inherit}b,strong{font-weight:bolder}code,kbd,samp,pre{font-family:var(--default-mono-font-family,ui-monospace,SFMono-Regular,Menlo,Monaco,Consolas,"Liberation Mono","Courier New",monospace);font-feature-settings:var(--default-mono-font-feature-settings,normal);font-variation-settings:var(--default-mono-font-variation-settings,normal);font-size:1em}small{font-size:80%}sub,sup{vertical-align:baseline;font-size:75%;line-height:0;position:relative}sub{bottom:-.25em}sup{top:-.5em}table{text-indent:0;border-color:inherit;border-collapse:collapse}:-moz-focusring{outline:auto}progress{vertical-align:baseline}summary{display:list-item}ol,ul,menu{list-style:none}img,svg,video,canvas,audio,iframe,embed,object{vertical-align:middle;display:block}img,video{max-width:100%;height:auto}button,input,select,optgroup,textarea{font:inherit;font-feature-settings:inherit;font-variation-settings:inherit;letter-spacing:inherit;color:inherit;opacity:1;background-color:#0000;border-radius:0}::file-selector-button{font:inherit;font-feature-settings:inherit;font-variation-settings:inherit;letter-spacing:inherit;color:inherit;opacity:1;background-color:#0000;border-radius:0}:where(select:is([multiple],[size])) optgroup{font-weight:bolder}:where(select:is([multiple],[size])) optgroup option{padding-inline-start:20px}::file-selector-button{margin-inline-end:4px}::placeholder{opacity:1;color:color-mix(in oklab,currentColor 50%,transparent)}textarea{resize:vertical}::-webkit-search-decoration{-webkit-appearance:none}::-webkit-date-and-time-value{min-height:1lh;text-align:inherit}::-webkit-datetime-edit{display:inline-flex}::-webkit-datetime-edit-fields-wrapper{padding:0}::-webkit-datetime-edit{padding-block:0}::-webkit-datetime-edit-year-field{padding-block:0}::-webkit-datetime-edit-month-field{padding-block:0}::-webkit-datetime-edit-day-field{padding-block:0}::-webkit-datetime-edit-hour-field{padding-block:0}::-webkit-datetime-edit-minute-field{padding-block:0}::-webkit-datetime-edit-second-field{padding-block:0}::-webkit-datetime-edit-millisecond-field{padding-block:0}::-webkit-datetime-edit-meridiem-field{padding-block:0}:-moz-ui-invalid{box-shadow:none}button,input:where([type=button],[type=reset],[type=submit]){-webkit-appearance:button;-moz-appearance:button;appearance:button}::file-selector-button{-webkit-appearance:button;-moz-appearance:button;appearance:button}::-webkit-inner-spin-button{height:auto}::-webkit-outer-spin-button{height:auto}[hidden]:where(:not([hidden=until-found])){display:none!important}}@layer components;@layer utilities{.absolute{position:absolute}.relative{position:relative}.static{position:static}.inset-0{inset:calc(var(--spacing)*0)}.-mt-\[4\.9rem\]{margin-top:-4.9rem}.-mb-px{margin-bottom:-1px}.mb-1{margin-bottom:calc(var(--spacing)*1)}.mb-2{margin-bottom:calc(var(--spacing)*2)}.mb-4{margin-bottom:calc(var(--spacing)*4)}.mb-6{margin-bottom:calc(var(--spacing)*6)}.-ml-8{margin-left:calc(var(--spacing)*-8)}.flex{display:flex}.hidden{display:none}.inline-block{display:inline-block}.inline-flex{display:inline-flex}.table{display:table}.aspect-\[335\/376\]{aspect-ratio:335/376}.h-1{height:calc(var(--spacing)*1)}.h-1\.5{height:calc(var(--spacing)*1.5)}.h-2{height:calc(var(--spacing)*2)}.h-2\.5{height:calc(var(--spacing)*2.5)}.h-3{height:calc(var(--spacing)*3)}.h-3\.5{height:calc(var(--spacing)*3.5)}.h-14{height:calc(var(--spacing)*14)}.h-14\.5{height:calc(var(--spacing)*14.5)}.min-h-screen{min-height:100vh}.w-1{width:calc(var(--spacing)*1)}.w-1\.5{width:calc(var(--spacing)*1.5)}.w-2{width:calc(var(--spacing)*2)}.w-2\.5{width:calc(var(--spacing)*2.5)}.w-3{width:calc(var(--spacing)*3)}.w-3\.5{width:calc(var(--spacing)*3.5)}.w-\[448px\]{width:448px}.w-full{width:100%}.max-w-\[335px\]{max-width:335px}.max-w-none{max-width:none}.flex-1{flex:1}.shrink-0{flex-shrink:0}.translate-y-0{--tw-translate-y:calc(var(--spacing)*0);translate:var(--tw-translate-x)var(--tw-translate-y)}.transform{transform:var(--tw-rotate-x)var(--tw-rotate-y)var(--tw-rotate-z)var(--tw-skew-x)var(--tw-skew-y)}.flex-col{flex-direction:column}.flex-col-reverse{flex-direction:column-reverse}.items-center{align-items:center}.justify-center{justify-content:center}.justify-end{justify-content:flex-end}.gap-3{gap:calc(var(--spacing)*3)}.gap-4{gap:calc(var(--spacing)*4)}:where(.space-x-1>:not(:last-child)){--tw-space-x-reverse:0;margin-inline-start:calc(calc(var(--spacing)*1)*var(--tw-space-x-reverse));margin-inline-end:calc(calc(var(--spacing)*1)*calc(1 - var(--tw-space-x-reverse)))}.overflow-hidden{overflow:hidden}.rounded-full{border-radius:3.40282e38px}.rounded-sm{border-radius:var(--radius-sm)}.rounded-t-lg{border-top-left-radius:var(--radius-lg);border-top-right-radius:var(--radius-lg)}.rounded-br-lg{border-bottom-right-radius:var(--radius-lg)}.rounded-bl-lg{border-bottom-left-radius:var(--radius-lg)}.border{border-style:var(--tw-border-style);border-width:1px}.border-\[\#19140035\]{border-color:#19140035}.border-\[\#e3e3e0\]{border-color:#e3e3e0}.border-black{border-color:var(--color-black)}.border-transparent{border-color:#0000}.bg-\[\#1b1b18\]{background-color:#1b1b18}.bg-\[\#FDFDFC\]{background-color:#fdfdfc}.bg-\[\#dbdbd7\]{background-color:#dbdbd7}.bg-\[\#fff2f2\]{background-color:#fff2f2}.bg-white{background-color:var(--color-white)}.p-6{padding:calc(var(--spacing)*6)}.px-5{padding-inline:calc(var(--spacing)*5)}.py-1{padding-block:calc(var(--spacing)*1)}.py-1\.5{padding-block:calc(var(--spacing)*1.5)}.py-2{padding-block:calc(var(--spacing)*2)}.pb-12{padding-bottom:calc(var(--spacing)*12)}.text-sm{font-size:var(--text-sm);line-height:var(--tw-leading,var(--text-sm--line-height))}.text-\[13px\]{font-size:13px}.leading-\[20px\]{--tw-leading:20px;line-height:20px}.leading-normal{--tw-leading:var(--leading-normal);line-height:var(--leading-normal)}.font-medium{--tw-font-weight:var(--font-weight-medium);font-weight:var(--font-weight-medium)}.text-\[\#1b1b18\]{color:#1b1b18}.text-\[\#706f6c\]{color:#706f6c}.text-\[\#F53003\],.text-\[\#f53003\]{color:#f53003}.text-white{color:var(--color-white)}.underline{text-decoration-line:underline}.underline-offset-4{text-underline-offset:4px}.opacity-100{opacity:1}.shadow-\[0px_0px_1px_0px_rgba\(0\,0\,0\,0\.03\)\,0px_1px_2px_0px_rgba\(0\,0\,0\,0\.06\)\]{--tw-shadow:0px 0px 1px 0px var(--tw-shadow-color,#00000008),0px 1px 2px 0px var(--tw-shadow-color,#0000000f);box-shadow:var(--tw-inset-shadow),var(--tw-inset-ring-shadow),var(--tw-ring-offset-shadow),var(--tw-ring-shadow),var(--tw-shadow)}.shadow-\[inset_0px_0px_0px_1px_rgba\(26\,26\,0\,0\.16\)\]{--tw-shadow:inset 0px 0px 0px 1px var(--tw-shadow-color,#1a1a0029);box-shadow:var(--tw-inset-shadow),var(--tw-inset-ring-shadow),var(--tw-ring-offset-shadow),var(--tw-ring-shadow),var(--tw-shadow)}.\!filter{filter:var(--tw-blur,)var(--tw-brightness,)var(--tw-contrast,)var(--tw-grayscale,)var(--tw-hue-rotate,)var(--tw-invert,)var(--tw-saturate,)var(--tw-sepia,)var(--tw-drop-shadow,)!important}.filter{filter:var(--tw-blur,)var(--tw-brightness,)var(--tw-contrast,)var(--tw-grayscale,)var(--tw-hue-rotate,)var(--tw-invert,)var(--tw-saturate,)var(--tw-sepia,)var(--tw-drop-shadow,)}.transition-all{transition-property:all;transition-timing-function:var(--tw-ease,var(--default-transition-timing-function));transition-duration:var(--tw-duration,var(--default-transition-duration))}.transition-opacity{transition-property:opacity;transition-timing-function:var(--tw-ease,var(--default-transition-timing-function));transition-duration:var(--tw-duration,var(--default-transition-duration))}.delay-300{transition-delay:.3s}.duration-750{--tw-duration:.75s;transition-duration:.75s}.not-has-\[nav\]\:hidden:not(:has(:is(nav))){display:none}.before\:absolute:before{content:var(--tw-content);position:absolute}.before\:top-0:before{content:var(--tw-content);top:calc(var(--spacing)*0)}.before\:top-1\/2:before{content:var(--tw-content);top:50%}.before\:bottom-0:before{content:var(--tw-content);bottom:calc(var(--spacing)*0)}.before\:bottom-1\/2:before{content:var(--tw-content);bottom:50%}.before\:left-\[0\.4rem\]:before{content:var(--tw-content);left:.4rem}.before\:border-l:before{content:var(--tw-content);border-left-style:var(--tw-border-style);border-left-width:1px}.before\:border-\[\#e3e3e0\]:before{content:var(--tw-content);border-color:#e3e3e0}@media (hover:hover){.hover\:border-\[\#1915014a\]:hover{border-color:#1915014a}.hover\:border-\[\#19140035\]:hover{border-color:#19140035}.hover\:border-black:hover{border-color:var(--color-black)}.hover\:bg-black:hover{background-color:var(--color-black)}}@media (width>=64rem){.lg\:-mt-\[6\.6rem\]{margin-top:-6.6rem}.lg\:mb-0{margin-bottom:calc(var(--spacing)*0)}.lg\:mb-6{margin-bottom:calc(var(--spacing)*6)}.lg\:-ml-px{margin-left:-1px}.lg\:ml-0{margin-left:calc(var(--spacing)*0)}.lg\:block{display:block}.lg\:aspect-auto{aspect-ratio:auto}.lg\:w-\[438px\]{width:438px}.lg\:max-w-4xl{max-width:var(--container-4xl)}.lg\:grow{flex-grow:1}.lg\:flex-row{flex-direction:row}.lg\:justify-center{justify-content:center}.lg\:rounded-t-none{border-top-left-radius:0;border-top-right-radius:0}.lg\:rounded-tl-lg{border-top-left-radius:var(--radius-lg)}.lg\:rounded-r-lg{border-top-right-radius:var(--radius-lg);border-bottom-right-radius:var(--radius-lg)}.lg\:rounded-br-none{border-bottom-right-radius:0}.lg\:p-8{padding:calc(var(--spacing)*8)}.lg\:p-20{padding:calc(var(--spacing)*20)}}@media (prefers-color-scheme:dark){.dark\:block{display:block}.dark\:hidden{display:none}.dark\:border-\[\#3E3E3A\]{border-color:#3e3e3a}.dark\:border-\[\#eeeeec\]{border-color:#eeeeec}.dark\:bg-\[\#0a0a0a\]{background-color:#0a0a0a}.dark\:bg-\[\#1D0002\]{background-color:#1d0002}.dark\:bg-\[\#3E3E3A\]{background-color:#3e3e3a}.dark\:bg-\[\#161615\]{background-color:#161615}.dark\:bg-\[\#eeeeec\]{background-color:#eeeeec}.dark\:text-\[\#1C1C1A\]{color:#1c1c1a}.dark\:text-\[\#A1A09A\]{color:#a1a09a}.dark\:text-\[\#EDEDEC\]{color:#ededec}.dark\:text-\[\#F61500\]{color:#f61500}.dark\:text-\[\#FF4433\]{color:#f43}.dark\:shadow-\[inset_0px_0px_0px_1px_\#fffaed2d\]{--tw-shadow:inset 0px 0px 0px 1px var(--tw-shadow-color,#fffaed2d);box-shadow:var(--tw-inset-shadow),var(--tw-inset-ring-shadow),var(--tw-ring-offset-shadow),var(--tw-ring-shadow),var(--tw-shadow)}.dark\:before\:border-\[\#3E3E3A\]:before{content:var(--tw-content);border-color:#3e3e3a}@media (hover:hover){.dark\:hover\:border-\[\#3E3E3A\]:hover{border-color:#3e3e3a}.dark\:hover\:border-\[\#62605b\]:hover{border-color:#62605b}.dark\:hover\:border-white:hover{border-color:var(--color-white)}.dark\:hover\:bg-white:hover{background-color:var(--color-white)}}}@starting-style{.starting\:translate-y-4{--tw-translate-y:calc(var(--spacing)*4);translate:var(--tw-translate-x)var(--tw-translate-y)}}@starting-style{.starting\:translate-y-6{--tw-translate-y:calc(var(--spacing)*6);translate:var(--tw-translate-x)var(--tw-translate-y)}}@starting-style{.starting\:opacity-0{opacity:0}}}@keyframes spin{to{transform:rotate(360deg)}}@keyframes ping{75%,to{opacity:0;transform:scale(2)}}@keyframes pulse{50%{opacity:.5}}@keyframes bounce{0%,to{animation-timing-function:cubic-bezier(.8,0,1,1);transform:translateY(-25%)}50%{animation-timing-function:cubic-bezier(0,0,.2,1);transform:none}}@property --tw-translate-x{syntax:"*";inherits:false;initial-value:0}@property --tw-translate-y{syntax:"*";inherits:false;initial-value:0}@property --tw-translate-z{syntax:"*";inherits:false;initial-value:0}@property --tw-rotate-x{syntax:"*";inherits:false;initial-value:rotateX(0)}@property --tw-rotate-y{syntax:"*";inherits:false;initial-value:rotateY(0)}@property --tw-rotate-z{syntax:"*";inherits:false;initial-value:rotateZ(0)}@property --tw-skew-x{syntax:"*";inherits:false;initial-value:skewX(0)}@property --tw-skew-y{syntax:"*";inherits:false;initial-value:skewY(0)}@property --tw-space-x-reverse{syntax:"*";inherits:false;initial-value:0}@property --tw-border-style{syntax:"*";inherits:false;initial-value:solid}@property --tw-leading{syntax:"*";inherits:false}@property --tw-font-weight{syntax:"*";inherits:false}@property --tw-shadow{syntax:"*";inherits:false;initial-value:0 0 #0000}@property --tw-shadow-color{syntax:"*";inherits:false}@property --tw-inset-shadow{syntax:"*";inherits:false;initial-value:0 0 #0000}@property --tw-inset-shadow-color{syntax:"*";inherits:false}@property --tw-ring-color{syntax:"*";inherits:false}@property --tw-ring-shadow{syntax:"*";inherits:false;initial-value:0 0 #0000}@property --tw-inset-ring-color{syntax:"*";inherits:false}@property --tw-inset-ring-shadow{syntax:"*";inherits:false;initial-value:0 0 #0000}@property --tw-ring-inset{syntax:"*";inherits:false}@property --tw-ring-offset-width{syntax:"<length>";inherits:false;initial-value:0}@property --tw-ring-offset-color{syntax:"*";inherits:false;initial-value:#fff}@property --tw-ring-offset-shadow{syntax:"*";inherits:false;initial-value:0 0 #0000}@property --tw-blur{syntax:"*";inherits:false}@property --tw-brightness{syntax:"*";inherits:false}@property --tw-contrast{syntax:"*";inherits:false}@property --tw-grayscale{syntax:"*";inherits:false}@property --tw-hue-rotate{syntax:"*";inherits:false}@property --tw-invert{syntax:"*";inherits:false}@property --tw-opacity{syntax:"*";inherits:false}@property --tw-saturate{syntax:"*";inherits:false}@property --tw-sepia{syntax:"*";inherits:false}@property --tw-drop-shadow{syntax:"*";inherits:false}@property --tw-duration{syntax:"*";inherits:false}@property --tw-content{syntax:"*";inherits:false;initial-value:""}
            </style>
        @endif
    </head>
    <body>
        <!-- Preloader Start -->
        <div id="preloader" class="preloader">
            <div class="animation-preloader">
                <div class="spinner">                
                </div>
                <div class="txt-loading">
                    <span data-text-preloader="Z" class="letters-loading">
                    Z
                    </span>
                    <span data-text-preloader="M" class="letters-loading">
                    M
                    </span>
                    <span data-text-preloader="J" class="letters-loading">
                    J
                    </span> <br>
                    <span data-text-preloader="E" class="letters-loading">
                    E
                    </span>
                    <span data-text-preloader="N" class="letters-loading">
                    N
                    </span>
                    <span data-text-preloader="T" class="letters-loading">
                    T
                    </span>
                    <span data-text-preloader="E" class="letters-loading">
                    E
                    </span>
                    <span data-text-preloader="R" class="letters-loading">
                    R
                    </span>
                    <span data-text-preloader="P" class="letters-loading">
                    P
                    </span>
                    <span data-text-preloader="R" class="letters-loading">
                    R
                    </span>
                    <span data-text-preloader="I" class="letters-loading">
                    I
                    </span>
                    <span data-text-preloader="S" class="letters-loading">
                    S
                    </span>
                    <span data-text-preloader="E" class="letters-loading">
                    E
                    </span>
                </div>
                <p class="text-center">Loading</p>
            </div>
            <div class="loader">
                <div class="row">
                    <div class="col-3 loader-section section-left">
                        <div class="bg"></div>
                    </div>
                    <div class="col-3 loader-section section-left">
                        <div class="bg"></div>
                    </div>
                    <div class="col-3 loader-section section-right">
                        <div class="bg"></div>
                    </div>
                    <div class="col-3 loader-section section-right">
                        <div class="bg"></div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Offcanvas Area Start -->
        <div class="fix-area">
            <div class="offcanvas__info">
                <div class="offcanvas__wrapper">
                    <div class="offcanvas__content">
                        <div class="offcanvas__top mb-5 d-flex justify-content-between align-items-center">
                            <div class="offcanvas__logo">
                                <a href="#">
                                <img src="public/assets/img/logo/n-logo.png" alt="logo-img">
                                </a>
                            </div>
                            <div class="offcanvas__close">
                                <button>
                                <i class="fas fa-times"></i>
                                </button>
                            </div>
                        </div>
                        <p class="text d-none d-lg-block">
                            This involves interactions between a business and its customers. It's about meeting customers' needs and resolving their problems. Effective customer service is crucial.
                        </p>
                        <div class="mobile-menu fix mb-5"></div>
                        <div class="offcanvas__contact">
                            <h5>Contact Info</h5>
                            <ul>
                                <li class="d-flex align-items-center">
                                    <div class="offcanvas__contact-icon">
                                        <i class="fal fa-map-marker-alt"></i>
                                    </div>
                                    <div class="offcanvas__contact-text">
                                        <a target="_blank" href="#">Main Street, Melbourne, Australia</a>
                                    </div>
                                </li>
                                <li class="d-flex align-items-center">
                                    <div class="offcanvas__contact-icon mr-15">
                                        <i class="fal fa-envelope"></i>
                                    </div>
                                    <div class="offcanvas__contact-text">
                                        <a href="tel:+013-003-003-9993"><span class="mailto:zmjenterprises727@gmail.com">zmjenterprises727@gmail.com</span></a>
                                    </div>
                                </li>
                                <li class="d-flex align-items-center">
                                    <div class="offcanvas__contact-icon mr-15">
                                        <i class="fal fa-clock"></i>
                                    </div>
                                    <div class="offcanvas__contact-text">
                                        <a target="_blank" href="#">Mod-friday, 09am -05pm</a>
                                    </div>
                                </li>
                                <li class="d-flex align-items-center">
                                    <div class="offcanvas__contact-icon mr-15">
                                        <i class="far fa-phone"></i>
                                    </div>
                                    <div class="offcanvas__contact-text">
                                        <a href="tel:+92 333 5499057">+92 333 5499057</a>
                                    </div>
                                </li>
                            </ul>
                            <div class="header-button mt-5">
                                <a href="contact.html" class="theme-btn hover-color text-center">
                                <span class="theme-effect">
                                <span class="effect-1"><i class="fas fa-chevron-right"></i>Get Appointment</span>
                                <span class="effect-1"><i class="fas fa-chevron-right"></i>Get Appointment</span>
                                </span>
                                </a>
                            </div>
                            <div class="social-icon d-flex align-items-center">
                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="#"><i class="fab fa-youtube"></i></a>
                                <a href="#"><i class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="offcanvas__overlay"></div>

        <!-- Header Area Start -->
        <header>
            <div class="header-top">
                <div class="header-top-wrapper">
                    <ul class="contact-list">
                        <li>
                            <i class="far fa-envelope"></i>zmjenterprises727@gmail.com
                        </li>
                        <li>
                            <i class="far fa-map-marker-alt"></i> 1K 7/A Commercial Area Nazimabad No 1, 74600, Nazimabad, Pakistan
                        </li>
                    </ul>
                    <span>
                    Welcome to our <a href="#">ZMJ Website</a>
                    </span>
                    <div class="top-left d-flex align-items-center">
                        <ul class="contact-list">
                            <li>
                                <i class="far fa-envelope"></i> Mon - Sat 8:00 - 17:30, Sunday - <span>CLOSED</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div id="header-sticky" class="header-1">
                <div class="header-logo">
                    <a href="#">
                    <img src="public/assets/img/logo/n-logo.png" alt="Header Logo">
                    </a>
                </div>
                <div class="mega-menu-wrapper">
                    <div class="header-main">
                        <div class="header-left">
                            <div class="mean__menu-wrapper d-none d-lg-block">
                                <div class="main-menu">
                                    <nav id="mobile-menu">
                                        <ul>
                                            <li class="has-dropdown active menu-thumb">
                                                <a href="#">
                                                Home
                                                {{-- <i class="fas fa-angle-down"></i> --}}
                                                </a>
                                                {{-- <ul class="submenu has-homemenu">
                                                    <li class="border-none">
                                                        <div class="row gx-6 row-cols-1 row-cols-md-2 row-cols-xl-6">
                                                            <div class="col homemenu">
                                                                <div class="homemenu-thumb">
                                                                    <img src="public/assets/img/header/home-1.jpg" alt="img">
                                                                    <div class="demo-button">
                                                                        <a href="#" class="theme-btn hover-color">
                                                                            <span class="theme-effect">
                                                                                <span class="effect-1">Multi Page</span>
                                                                                <span class="effect-1">Multi Page</span>
                                                                            </span>
                                                                        </a>
                                                                        <a href="index-one-page.html" class="theme-btn hover-color">
                                                                            <span class="theme-effect">
                                                                                <span class="effect-1">One Page</span>
                                                                                <span class="effect-1">One Page</span>
                                                                            </span>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                                <div class="homemenu-content text-center">
                                                                    <h4 class="homemenu-title">
                                                                        Home 01
                                                                    </h4>
                                                                </div>
                                                            </div>
                                                            <div class="col homemenu">
                                                                <div class="homemenu-thumb mb-15">
                                                                    <img src="public/assets/img/header/home-2.jpg" alt="img">
                                                                    <div class="demo-button">
                                                                        <a href="index-2.html" class="theme-btn hover-color">
                                                                            <span class="theme-effect">
                                                                                <span class="effect-1">Multi Page</span>
                                                                                <span class="effect-1">Multi Page</span>
                                                                            </span>
                                                                        </a>
                                                                        <a href="index-two-page.html" class="theme-btn hover-color">
                                                                            <span class="theme-effect">
                                                                                <span class="effect-1">One Page</span>
                                                                                <span class="effect-1">One Page</span>
                                                                            </span>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                                <div class="homemenu-content text-center">
                                                                    <h4 class="homemenu-title">
                                                                        Home 02
                                                                    </h4>
                                                                </div>
                                                            </div>
                                                            <div class="col homemenu">
                                                                <div class="homemenu-thumb mb-15">
                                                                    <img src="public/assets/img/header/home-3.jpg" alt="img">
                                                                    <div class="demo-button">
                                                                        <a href="index-3.html" class="theme-btn hover-color">
                                                                            <span class="theme-effect">
                                                                                <span class="effect-1">Multi Page</span>
                                                                                <span class="effect-1">Multi Page</span>
                                                                            </span>
                                                                        </a>
                                                                        <a href="index-three-page.html" class="theme-btn hover-color">
                                                                            <span class="theme-effect">
                                                                                <span class="effect-1">One Page</span>
                                                                                <span class="effect-1">One Page</span>
                                                                            </span>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                                <div class="homemenu-content text-center">
                                                                    <h4 class="homemenu-title">
                                                                        Home 03
                                                                    </h4>
                                                                </div>
                                                            </div>
                                                            <div class="col homemenu">
                                                                <div class="homemenu-thumb mb-15">
                                                                    <img src="public/assets/img/header/home-4.jpg" alt="img">
                                                                    <div class="demo-button">
                                                                        <a href="index-4.html" class="theme-btn hover-color">
                                                                            <span class="theme-effect">
                                                                                <span class="effect-1">Multi Page</span>
                                                                                <span class="effect-1">Multi Page</span>
                                                                            </span>
                                                                        </a>
                                                                        <a href="index-four-page.html" class="theme-btn hover-color">
                                                                            <span class="theme-effect">
                                                                                <span class="effect-1">One Page</span>
                                                                                <span class="effect-1">One Page</span>
                                                                            </span>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                                <div class="homemenu-content text-center">
                                                                    <h4 class="homemenu-title">
                                                                        Home 04
                                                                    </h4>
                                                                </div>
                                                            </div>
                                                            <div class="col homemenu">
                                                                <div class="homemenu-thumb mb-15">
                                                                    <img src="public/assets/img/header/home-5.jpg" alt="img">
                                                                    <div class="demo-button">
                                                                        <a href="index-5.html" class="theme-btn hover-color">
                                                                            <span class="theme-effect">
                                                                                <span class="effect-1">Multi Page</span>
                                                                                <span class="effect-1">Multi Page</span>
                                                                            </span>
                                                                        </a>
                                                                        <a href="index-five-page.html" class="theme-btn hover-color">
                                                                            <span class="theme-effect">
                                                                                <span class="effect-1">One Page</span>
                                                                                <span class="effect-1">One Page</span>
                                                                            </span>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                                <div class="homemenu-content text-center">
                                                                    <h4 class="homemenu-title">
                                                                        Home 05
                                                                    </h4>
                                                                </div>
                                                            </div>
                                                            <div class="col homemenu">
                                                                <div class="homemenu-thumb mb-15">
                                                                    <img src="public/assets/img/header/home-6.jpg" alt="img">
                                                                    <div class="demo-button">
                                                                        <a href="index-6.html" class="theme-btn hover-color">
                                                                            <span class="theme-effect">
                                                                                <span class="effect-1">Multi Page</span>
                                                                                <span class="effect-1">Multi Page</span>
                                                                            </span>
                                                                        </a>
                                                                        <a href="index-six-page.html" class="theme-btn hover-color">
                                                                            <span class="theme-effect">
                                                                                <span class="effect-1">One Page</span>
                                                                                <span class="effect-1">One Page</span>
                                                                            </span>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                                <div class="homemenu-content text-center">
                                                                    <h4 class="homemenu-title">
                                                                        Home 06
                                                                    </h4>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                </ul> --}}
                                            </li>
                                            <li class="has-dropdown active d-xxl-none">
                                                <a href="team.html" class="border-none">
                                                Home
                                                {{-- <i class="fas fa-angle-down"></i> --}}
                                                </a>
                                                {{-- <ul class="submenu">
                                                    <li><a href="#">Home 01</a></li>
                                                    <li><a href="index-2.html">Home 02</a></li>
                                                    <li><a href="index-3.html">Home 03</a></li>
                                                    <li><a href="index-4.html">Home 04</a></li>
                                                    <li><a href="index-5.html">Home 05</a></li>
                                                    <li><a href="index-6.html">Home 06</a></li>
                                                </ul> --}}
                                            </li>
                                            <li>
                                                <a href="about.html">About</a>
                                            </li>
                                            <li>
                                                <a href="services.html">
                                                Services
                                                <i class="fas fa-angle-down"></i>
                                                </a>
                                                <ul class="submenu">
                                                    <li><a href="services.html">Services</a></li>
                                                    <li><a href="service-details.html">Service Details</a></li>
                                                </ul>
                                            </li>
                                            <li>
                                                <a href="news.html">
                                                news
                                                <i class="fas fa-angle-down"></i>
                                                </a>
                                                <ul class="submenu">
                                                    <li><a href="news.html">news</a></li>
                                                    <li><a href="news-details.html">news Details</a></li>
                                                </ul>
                                            </li>
                                            <li class="has-dropdown">
                                                <a href="news.html">
                                                Pages
                                                <i class="fas fa-angle-down"></i>
                                                </a>
                                                <ul class="submenu">
                                                    <li class="has-dropdown">
                                                        <a href="case-study.html">
                                                        Case Study
                                                        <i class="fas fa-angle-down"></i>
                                                        </a>
                                                        <ul class="submenu">
                                                            <li><a href="case-study.html">Case Study</a></li>
                                                            <li><a href="case-details.html">Case Details</a></li>
                                                        </ul>
                                                    </li>
                                                    <li class="has-dropdown">
                                                        <a href="team.html">
                                                        Team
                                                        <i class="fas fa-angle-down"></i>
                                                        </a>
                                                        <ul class="submenu">
                                                            <li><a href="team.html">Team</a></li>
                                                            <li><a href="team-details.html">Team Details</a></li>
                                                        </ul>
                                                    </li>
                                                    <li class="has-dropdown">
                                                        <a href="shop.html">
                                                        Shop
                                                        <i class="fas fa-angle-down"></i>
                                                        </a>
                                                        <ul class="submenu">
                                                            <li><a href="shop.html">Product</a></li>
                                                            <li><a href="product-details.html">product Details One</a></li>
                                                            <li><a href="product-details-2.html">product Details Two</a></li>
                                                            <li><a href="product-cart.html">product Cart</a></li>
                                                            <li><a href="checkout.html">checkout</a></li>
                                                        </ul>
                                                    </li>
                                                    <li><a href="faq.html">Faq's</a></li>
                                                    <li><a href="coming-soon.html">coming soon</a></li>
                                                    <li><a href="404.html">404 Page</a></li>
                                                </ul>
                                            </li>
                                            <li>
                                                <a href="contact.html">Contact</a>
                                            </li>
                                        </ul>
                                    </nav>
                                    <!-- for wp -->
                                </div>
                            </div>
                        </div>
                        <div class="header-right d-flex justify-content-end align-items-center">
                            <div class="header-button">
                                <a href="contact.html" class="theme-btn hover-color">
                                <span class="theme-effect">
                                <span class="effect-1"><i class="fas fa-chevron-right"></i>Get Appointment</span>
                                <span class="effect-1"><i class="fas fa-chevron-right"></i>Get Appointment</span>
                                </span>
                                </a>
                            </div>
                            <div class="header__hamburger d-xl-block my-auto">
                                <div class="sidebar__toggle">
                                    <a class="bar-icon" href="javascript:void(0)">
                                    <img src="public/assets/img/logo/bar.svg" alt="bar-img">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <!-- Hero Section Start -->
        <section class="hero-section hero-4 style-3">
            <div class="array-button">
                <button class="array-prev"><i class="fal fa-arrow-right"></i></button>
                <button class="array-next"><i class="fal fa-arrow-left"></i></button>
            </div>
            <div class="swiper hero-slider-4">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="hero-image bg-cover" style="background-image: url('assets/img/hero/new/07.jpg');"></div>
                        <div class="shape-1"  data-animation="fadeInUp" data-delay="2.3s">
                            <img src="public/assets/img/hero/new/shape.png" alt="shape-img">
                        </div>
                        <div class="shape-2" data-animation="fadeInRight" data-delay="2.1s">
                            <img src="public/assets/img/hero/new/shape-2.png" alt="shape-img">
                        </div>
                        <div class="container">
                            <div class="row">
                                <div class="col-xl-12">
                                   <div class="hero-content">
                                        <h6 data-animation="fadeInUp" data-delay="1.3s">WE ARE BEST Construction SERVICE COMPANY</h6>
                                        <h1 class="text-white" data-animation="fadeInUp" data-delay="1.5s">
                                            We create <br>
                                            Space for life                                            
                                        </h1>
                                        <p data-animation="fadeInUp" data-delay="1.7s">
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eius <br>
                                            mod tempor incididunt ut labore et dolore magna aliqua.
                                        </p>
                                        <div class="hero-button">
                                            <a href="about.html" data-animation="fadeInUp" data-delay="1.9s" class="theme-btn hover-color">
                                                <span class="theme-effect">
                                                <span class="effect-1"><i class="fas fa-chevron-right"></i>learn More</span>
                                                <span class="effect-1"><i class="fas fa-chevron-right"></i>learn More</span>
                                                </span>
                                            </a>
                                            <div class="video-box">
                                                <a href="https://www.youtube.com/watch?v=Cn4G2lZ_g2I"  data-animation="fadeInUp" data-delay="1.9s" class="video-btn ripple video-popup">
                                                    <i class="fas fa-play"></i>
                                                </a>
                                            </div>
                                        </div>
                                   </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="hero-image bg-cover" style="background-image: url('assets/img/hero/new/08.jpg');"></div>
                        <div class="shape-1"  data-animation="fadeInUp" data-delay="2.3s">
                            <img src="public/assets/img/hero/new/shape.png" alt="shape-img">
                        </div>
                        <div class="shape-2" data-animation="fadeInRight" data-delay="2.1s">
                            <img src="public/assets/img/hero/new/shape-2.png" alt="shape-img">
                        </div>
                        <div class="container">
                            <div class="row">
                                <div class="col-xl-12">
                                   <div class="hero-content">
                                        <h6 data-animation="fadeInUp" data-delay="1.3s">WE ARE BEST Construction SERVICE COMPANY</h6>
                                        <h1 class="text-white" data-animation="fadeInUp" data-delay="1.5s">
                                            We create <br>
                                            Space for life                                            
                                        </h1>
                                        <p data-animation="fadeInUp" data-delay="1.7s">
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eius <br>
                                            mod tempor incididunt ut labore et dolore magna aliqua.
                                        </p>
                                        <div class="hero-button">
                                            <a href="about.html" data-animation="fadeInUp" data-delay="1.9s" class="theme-btn hover-color">
                                                <span class="theme-effect">
                                                <span class="effect-1"><i class="fas fa-chevron-right"></i>learn More</span>
                                                <span class="effect-1"><i class="fas fa-chevron-right"></i>learn More</span>
                                                </span>
                                            </a>
                                            <div class="video-box">
                                                <a href="https://www.youtube.com/watch?v=Cn4G2lZ_g2I"  data-animation="fadeInUp" data-delay="1.9s" class="video-btn ripple video-popup">
                                                    <i class="fas fa-play"></i>
                                                </a>
                                            </div>
                                        </div>
                                   </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="hero-image bg-cover" style="background-image: url('assets/img/hero/new/09.jpg');"></div>
                        <div class="shape-1"  data-animation="fadeInUp" data-delay="2.3s">
                            <img src="public/assets/img/hero/new/shape.png" alt="shape-img">
                        </div>
                        <div class="shape-2" data-animation="fadeInRight" data-delay="2.1s">
                            <img src="public/assets/img/hero/new/shape-2.png" alt="shape-img">
                        </div>
                        <div class="container">
                            <div class="row">
                                <div class="col-xl-12">
                                   <div class="hero-content">
                                        <h6 data-animation="fadeInUp" data-delay="1.3s">WE ARE BEST Construction SERVICE COMPANY</h6>
                                        <h1 class="text-white" data-animation="fadeInUp" data-delay="1.5s">
                                            We create <br>
                                            Space for life                                            
                                        </h1>
                                        <p data-animation="fadeInUp" data-delay="1.7s">
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eius <br>
                                            mod tempor incididunt ut labore et dolore magna aliqua.
                                        </p>
                                        <div class="hero-button">
                                            <a href="about.html" data-animation="fadeInUp" data-delay="1.9s" class="theme-btn hover-color">
                                                <span class="theme-effect">
                                                <span class="effect-1"><i class="fas fa-chevron-right"></i>learn More</span>
                                                <span class="effect-1"><i class="fas fa-chevron-right"></i>learn More</span>
                                                </span>
                                            </a>
                                            <div class="video-box">
                                                <a href="https://www.youtube.com/watch?v=Cn4G2lZ_g2I"  data-animation="fadeInUp" data-delay="1.9s" class="video-btn ripple video-popup">
                                                    <i class="fas fa-play"></i>
                                                </a>
                                            </div>
                                        </div>
                                   </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>        

        <!-- About Section Start -->
        <section class="about-section fix section-padding">
            <div class="about-wrapper">
                <div class="container">
                    <div class="section-header">
                        <div class="circle-box">
                            <img src="public/assets/img/about/text-circle.png" alt="img" class="text-circle">
                            <div class="icon-img">
                                <img src="public/assets/img/about/icon.png" alt="img">
                            </div>
                        </div>
                        <h2 class="wow fadeInUp" data-wow-delay=".4s">
                            we are here <br>
                            for goods renovate <br> <span>anything.</span>
                        </h2>
                    </div>
                    <div class="row">
                        <div class="col-xl-6 col-lg-6 wow fadeInLeft" data-wow-delay=".3s">
                            <div class="about-image">
                                <img src="public/assets/img/about/about.jpg" alt="about-img">
                                <div class="counter-content">
                                    <h6>project done</h6>
                                    <h2><span class="count">2</span>m</h2>
                                </div>
                                <div class="dot">
                                    <img src="public/assets/img/about/dot.png" alt="dot">
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6">
                            <div class="about-content">
                                <p class="wow fadeInUp" data-wow-delay=".3s">
                                    This involves interactions between a business and its customers. It's about meeting customers' needs and resolving their problems. Effective customer service is crucial for maintaining customer satisfaction and loyalty.
                                </p>
                                <div class="about-image-2 wow fadeInUp" data-wow-delay=".5s">
                                    <img src="public/assets/img/about/about-2.jpg" alt="about-img">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Service Section Start -->
        <div class="service-section fix section-bg section-padding">
            <div class="service-wrapper">
                <div class="container">
                    <div class="row align-items-center justify-content-between">
                        <div class=" col-xl-4 mt-5 mt-xl-0 wow fadeInUp" data-wow-delay=".4s">
                            <div class="service-content">
                                <div class="section-title style-2">
                                    <span class="wow fadeInUp">
                                    <img src="public/assets/img/hero/title.png" alt="title-img">
                                    services
                                    </span>
                                    <h2 class="wow fadeInUp" data-wow-delay=".3s">
                                        our service <br>
                                        is creative, <br>
                                        & decent
                                    </h2>
                                </div>
                                <div class="service-list mb-4">
                                    <ul class="wow fadeInUp" data-wow-delay=".5s">
                                        <li><i class="far fa-check pe-1"></i>On-time duty & work</li>
                                        <li><i class="far fa-check pe-1"></i>Phases of Construction</li>
                                    </ul>
                                </div>
                                <div class="service-button wow fadeInUp" data-wow-delay=".7s">
                                    <a href="service-details.html" class="theme-btn">
                                    <span class="theme-effect">
                                    <span class="effect-1"><i class="fas fa-chevron-right"></i>hire us now</span>
                                    <span class="effect-1"><i class="fas fa-chevron-right"></i>hire us now</span>
                                    </span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-8 mt-5 mt-xl-0">
                            <div class="service-icon-area">
                                <div class="row g-4">
                                    <div class="col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".3s">
                                        <div class="icon-items">
                                            <div class="icon">
                                                <i class="flaticon-gear"></i>
                                            </div>
                                            <div class="content">
                                                <h6>
                                                    <a href="service-details.html">
                                                        Residential
                                                        Construction
                                                    </a>
                                                </h6>
                                                <p>
                                                    This involves interactions between a business and its customers
                                                </p>
                                                <a href="service-details.html" class="link-btn mt-3">Read More <i class="far fa-long-arrow-right"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".5s">
                                        <div class="icon-items">
                                            <div class="icon">
                                                <i class="flaticon-engineer"></i>
                                            </div>
                                            <div class="content">
                                                <h6>
                                                    <a href="service-details.html">
                                                        COMMERCIAL
                                                        RENOVATE
                                                    </a>
                                                </h6>
                                                <p>
                                                    This involves interactions between a business and its customers
                                                </p>
                                                <a href="service-details.html" class="link-btn mt-3">Read More <i class="far fa-long-arrow-right"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".7s">
                                        <div class="icon-items">
                                            <div class="icon">
                                                <i class="flaticon-nut"></i>
                                            </div>
                                            <div class="content">
                                                <h6>
                                                    <a href="service-details.html">
                                                        ENVIRONMENTAL
                                                        IMPACT
                                                    </a>
                                                </h6>
                                                <p>
                                                    This involves interactions between a business and its customers
                                                </p>
                                                <a href="service-details.html" class="link-btn mt-3">Read More <i class="far fa-long-arrow-right"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".9s">
                                        <div class="icon-items">
                                            <div class="icon">
                                                <i class="flaticon-engineer-1"></i>
                                            </div>
                                            <div class="content">
                                                <h6>
                                                    <a href="service-details.html">
                                                        AUTOMATION
                                                        AND ROBOTICS
                                                    </a>
                                                </h6>
                                                <p>
                                                    This involves interactions between a business and its customers
                                                </p>
                                                <a href="service-details.html" class="link-btn mt-3">Read More <i class="far fa-long-arrow-right"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Contact Info Section Start -->
        <section class="contact-info-section fix">
            <div class="pattern-shape">
                <img src="public/assets/img/contact/pattern.png" alt="shape-img">
            </div>
            <div class="container">
                <div class="contact-info-wrapper">
                    <div class="contact-info-items d-flex align-items-center wow fadeInUp" data-wow-delay=".3s">
                        <div class="content">
                            <span>NEED A support?</span>
                            <h5>zmjenterprises727@gmail.com</h5>
                        </div>
                        <div class="icon">
                            <img src="public/assets/img/contact/icon.svg" alt="icon-img">
                        </div>
                    </div>
                    <div class="contact-info-items d-flex align-items-center wow fadeInUp" data-wow-delay=".5s">
                        <div class="content">
                            <span>HAVE A QUESTION?</span>
                            <h5>+92 333 5499057</h5>
                        </div>
                        <div class="icon">
                            <img src="public/assets/img/contact/icon-2.svg" alt="icon-img">
                        </div>
                    </div>
                    <div class="contact-info-items d-flex align-items-center wow fadeInUp" data-wow-delay=".7s">
                        <div class="content">
                            <span>WE ARE OPEN MONDAY-FRIDAY</span>
                            <h5>7:00 am - 9:00 pm</h5>
                        </div>
                        <div class="icon">
                            <img src="public/assets/img/contact/icon-3.svg" alt="icon-img">
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Sponsors Section Start -->
        <section class="sponsors-section fix section-bg-2 section-padding">
            <div class="sposors-wrapper">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-xl-6 col-lg-6">
                            <div class="sponsors-content">
                                <div class="section-title white-color">
                                    <span class="wow fadeInUp">
                                    <img src="public/assets/img/title-2.png" alt="title-img">
                                    sponsors
                                    </span>
                                    <h2 class="wow fadeInUp" data-wow-delay=".3s">
                                        sponsors <br>
                                        from around <br>
                                        the world
                                    </h2>
                                </div>
                                <p class="wow fadeInUp" data-wow-delay=".5s">
                                    This involves interactions between a business and its customers. It's about meeting customers.
                                </p>
                                <div class="soposors-button wow fadeInUp" data-wow-delay=".7s">
                                    <a href="about.html" class="theme-btn bg-color-2">
                                    <span class="theme-effect">
                                    <span class="effect-1"><i class="fas fa-chevron-right"></i>next be you</span>
                                    <span class="effect-1"><i class="fas fa-chevron-right"></i>next be you</span>
                                    </span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 mt-5 mt-lg-0">
                            <div class="sponsor-right">
                                <div class="sponsor-items d-flex align-items-center justify-content-between">
                                    <div class="sponsor-image wow fadeInUp" data-wow-delay=".3s">
                                        <img src="public/assets/img/sponsor/01.png" alt="img">
                                    </div>
                                    <div class="sponsor-image wow fadeInUp" data-wow-delay=".5s">
                                        <img src="public/assets/img/sponsor/02.png" alt="img">
                                    </div>
                                    <div class="sponsor-image wow fadeInUp" data-wow-delay=".7s">
                                        <img src="public/assets/img/sponsor/03.png" alt="img">
                                    </div>
                                </div>
                                <div class="sponsor-items d-flex align-items-center justify-content-between">
                                    <div class="sponsor-image wow fadeInUp" data-wow-delay=".3s">
                                        <img src="public/assets/img/sponsor/04.png" alt="img">
                                    </div>
                                    <div class="sponsor-image wow fadeInUp" data-wow-delay=".5s">
                                        <img src="public/assets/img/sponsor/07.png" alt="img">
                                    </div>
                                    <div class="sponsor-image wow fadeInUp" data-wow-delay=".7s">
                                        <img src="public/assets/img/sponsor/05.png" alt="img">
                                    </div>
                                </div>
                                <div class="sponsor-items d-flex align-items-center justify-content-between">
                                    <div class="sponsor-image wow fadeInUp" data-wow-delay=".3s">
                                        <img src="public/assets/img/sponsor/06.png" alt="img">
                                    </div>
                                    <div class="sponsor-image wow fadeInUp" data-wow-delay=".5s">
                                        <img src="public/assets/img/sponsor/08.png" alt="img">
                                    </div>
                                    <div class="sponsor-image wow fadeInUp" data-wow-delay=".7s">
                                        <img src="public/assets/img/sponsor/09.png" alt="img">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Portfolio Section Start -->
        <section class="portfolio-section section-padding fix">
            <div class="pattern-shape">
                <img src="public/assets/img/contact/pattern.png" alt="shape-img">
            </div>
            <div class="array-btn">
                <button class="array-prev">
                <span>prev</span>
                </button>
                <button class="array-next">
                <span>next</span>
                </button>
            </div>
            <div class="container">
                <div class="section-title text-center">
                    <span class="wow fadeInUp">
                    <img src="public/assets/img/hero/title.png" alt="title-img">
                    portfolio
                    <img src="public/assets/img/hero/title.png" alt="title-img" class="title-img-2">
                    </span>
                    <h2 class="wow fadeInUp" data-wow-delay=".3s">
                        company cases
                    </h2>
                </div>
                <div class="portfolio-wrapper">
                    <div class="row g-0 align-items-center">
                        <div class="col-xl-3">
                            <div class="portfolio-items">
                                <div class="swiper portfolio-slider-2">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide">
                                            <div class="single-portfolio-items">
                                                <div class="logo">
                                                    <img src="public/assets/img/portfolio/logo.svg" alt="img">
                                                </div>
                                                <h5 class="text-right">
                                                    01
                                                </h5>
                                                <div class="portfolio-content">
                                                    <div class="sub-content">
                                                        <span>duration: 6 month</span>
                                                        <div class="portfolio-btn">
                                                            <a href="case-details.html">
                                                            <i class="fas fa-chevron-right"></i>
                                                            case details
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <h3>
                                                        <a href="case-details.html">
                                                        vertrio houses
                                                        construction
                                                        </a>
                                                    </h3>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="single-portfolio-items">
                                                <div class="logo">
                                                    <img src="public/assets/img/portfolio/logo.svg" alt="img">
                                                </div>
                                                <h5 class="text-right">
                                                    02
                                                </h5>
                                                <div class="portfolio-content">
                                                    <div class="sub-content">
                                                        <span>duration: 6 month</span>
                                                        <div class="portfolio-btn">
                                                            <a href="case-details.html">
                                                            <i class="fas fa-chevron-right"></i>
                                                            case details
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <h3>
                                                        <a href="case-details.html">
                                                        vertrio houses
                                                        construction
                                                        </a>
                                                    </h3>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="single-portfolio-items">
                                                <div class="logo">
                                                    <img src="public/assets/img/portfolio/logo.svg" alt="img">
                                                </div>
                                                <h5 class="text-right">
                                                    03
                                                </h5>
                                                <div class="portfolio-content">
                                                    <div class="sub-content">
                                                        <span>duration: 6 month</span>
                                                        <div class="portfolio-btn">
                                                            <a href="case-details.html">
                                                            <i class="fas fa-chevron-right"></i>
                                                            case details
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <h3>
                                                        <a href="case-details.html">
                                                        vertrio houses
                                                        construction
                                                        </a>
                                                    </h3>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-9">
                            <div class="swiper portfolio-slider">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <div class="portfolio-image">
                                            <img src="public/assets/img/portfolio/001.jpg" alt="portfolio-img">
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="portfolio-image">
                                            <img src="public/assets/img/portfolio/002.jpg" alt="portfolio-img">
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="portfolio-image">
                                            <img src="public/assets/img/portfolio/003.jpg" alt="portfolio-img">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Testimonial Section Start -->
        <section class="testimonial-section">
            <div class="testimonial-bg section-padding" data-background="assets/img/testimonial/bg.jpg">
                <div class="text-circle">
                    <img src="public/assets/img/testimonial/text-circle.png" alt="text-circle">
                </div>
                <div class="container">
                    <div class="section-title white-color">
                        <span class="text-white wow fadeInUp">
                        <img src="public/assets/img/title-2.png" alt="title-img">
                        testimonials
                        </span>
                        <h2 class="wow fadeInUp" data-wow-delay=".3s">
                            happy users from <br>
                            <span class="text">around</span> <span class="text-2">the world</span>
                        </h2>
                    </div>
                    <div class="testimonial-wrapper">
                        <div class="array-btn">
                            <button class="array-prev">
                            <i class="fas fa-long-arrow-left"></i>
                            </button>
                            <button class="array-next">
                            <i class="fas fa-long-arrow-right"></i>
                            </button>
                        </div>
                        <div class="row">
                            <div class="col-xl-2 col-lg-2">
                                <div class="client-image-items">
                                    <div class="swiper testimonial-image-slider">
                                        <div class="swiper-wrapper">
                                            <div class="swiper-slide">
                                                <div class="client-image">
                                                    <img src="public/assets/img/testimonial/01.png" alt="client-img">
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="client-image">
                                                    <img src="public/assets/img/testimonial/02.png" alt="client-img">
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="client-image">
                                                    <img src="public/assets/img/testimonial/03.png" alt="client-img">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-10 col-lg-10">
                                <div class="swiper testimonial-slide-content">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide">
                                            <div class="testimonial-content">
                                                <ul>
                                                    <li><i class="fas fa-star"></i></li>
                                                    <li><i class="fas fa-star"></i></li>
                                                    <li><i class="fas fa-star"></i></li>
                                                    <li><i class="fas fa-star"></i></li>
                                                    <li><i class="fas fa-star"></i></li>
                                                </ul>
                                                <h3>
                                                    “ As a Project Manager, I've used numerous construction websites, but this one stands out for its exceptional user-friendliness and comprehensive resource pool. ”
                                                </h3>
                                                <div class="client-info">
                                                    <h6>head of idea <span>/ronald co</span></h6>
                                                    <h4>Rosalina D. William</h4>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="testimonial-content">
                                                <ul>
                                                    <li><i class="fas fa-star"></i></li>
                                                    <li><i class="fas fa-star"></i></li>
                                                    <li><i class="fas fa-star"></i></li>
                                                    <li><i class="fas fa-star"></i></li>
                                                    <li><i class="fas fa-star"></i></li>
                                                </ul>
                                                <h3>
                                                    “ As a Project Manager, I've used numerous construction websites, but this one stands out for its exceptional user-friendliness and comprehensive resource pool. ”
                                                </h3>
                                                <div class="client-info">
                                                    <h6>head of idea <span>/ronald co</span></h6>
                                                    <h4>Rosalina D. William</h4>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="testimonial-content">
                                                <ul>
                                                    <li><i class="fas fa-star"></i></li>
                                                    <li><i class="fas fa-star"></i></li>
                                                    <li><i class="fas fa-star"></i></li>
                                                    <li><i class="fas fa-star"></i></li>
                                                    <li><i class="fas fa-star"></i></li>
                                                </ul>
                                                <h3>
                                                    “ As a Project Manager, I've used numerous construction websites, but this one stands out for its exceptional user-friendliness and comprehensive resource pool. ”
                                                </h3>
                                                <div class="client-info">
                                                    <h6>head of idea <span>/ronald co</span></h6>
                                                    <h4>Rosalina D. William</h4>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Team Section Start -->
        <section class="team-section fix section-padding">
            <div class="container">
                <div class="section-title text-center">
                    <span class="wow fadeInUp">
                    <img src="public/assets/img/hero/title.png" alt="title-img">
                    team
                    <img src="public/assets/img/hero/title.png" alt="title-img" class="title-img-2">
                    </span>
                    <h2 class="wow fadeInUp" data-wow-delay=".3s">
                        our avengers
                    </h2>
                </div>
                <div class="row">
                    <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".3s">
                        <div class="single-team-items text-center">
                            <div class="team-image">
                                <img src="public/assets/img/team/01.png" alt="team-img">
                                <div class="icon-shape">
                                    <img src="public/assets/img/team/icon.png" alt="icon-shape">
                                </div>
                            </div>
                            <div class="team-content">
                                <p>founder</p>
                                <h4><a href="team-details.html">miranda h. halim</a></h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".5s">
                        <div class="single-team-items text-center">
                            <div class="team-image">
                                <img src="public/assets/img/team/02.png" alt="team-img">
                                <div class="icon-shape">
                                    <img src="public/assets/img/team/icon.png" alt="icon-shape">
                                </div>
                            </div>
                            <div class="team-content">
                                <p>ceo</p>
                                <h4><a href="team-details.html">Rosalina D. Will</a></h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".7s">
                        <div class="single-team-items text-center">
                            <div class="team-image">
                                <img src="public/assets/img/team/03.png" alt="team-img">
                                <div class="icon-shape">
                                    <img src="public/assets/img/team/icon.png" alt="icon-shape">
                                </div>
                            </div>
                            <div class="team-content">
                                <p>worker</p>
                                <h4><a href="team-details.html">tromson d. dows</a></h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- News Section Start -->
        <section class="news-section fix section-bg section-padding">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-7 col-9">
                        <div class="section-title">
                            <span class="wow fadeInUp">
                            <img src="public/assets/img/hero/title.png" alt="title-img">
                            company insights
                            </span>
                            <h2 class="wow fadeInUp" data-wow-delay=".3s"> 
                                daily updates & <br>
                                blog feeds
                            </h2>
                        </div>
                    </div>
                    <div class="col-md-5 ps-0 col-3 text-end d-none d-md-block wow fadeInRight" data-wow-delay=".4s">
                        <a href="news-details.html" class="theme-btn">
                        <span class="theme-effect">
                        <span class="effect-1"><i class="fas fa-chevron-right"></i>more news</span>
                        <span class="effect-1"><i class="fas fa-chevron-right"></i>more news</span>
                        </span>
                        </a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-7 col-lg-7 wow fadeInUp" data-wow-delay=".3s">
                        <div class="news-image">
                            <img src="public/assets/img/news/01.jpg" alt="news-img">
                            <div class="post-cat-item">
                                <h6 class="post-title"><a href="news-details.html">consult</a></h6>
                                <h6 class="post-title-2"><a href="news-details.html">construction</a></h6>
                            </div>
                            <div class="news-content">
                                <ul class="post-date">
                                    <li>
                                        <i class="fas fa-calendar-alt"></i>
                                        jan 28, 2024 <span>/ronald</span>
                                    </li>
                                </ul>
                                <h4>
                                    <a href="news-details.html">
                                    Techniques for sustainable and
                                    environmentally
                                    </a>
                                </h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-5 col-lg-5">
                        <div class="news-right-content">
                            <div class="single-news-items wow fadeInUp" data-wow-delay=".3s">
                                <div class="news-content">
                                    <ul class="post-date">
                                        <li>
                                            <i class="fas fa-calendar-alt"></i>
                                            jan 28, 2024 <span>/ronald</span>
                                        </li>
                                    </ul>
                                    <h5>
                                        <a href="news-details.html">
                                        Increasing efficiency and safety on construction sites
                                        </a>
                                    </h5>
                                </div>
                            </div>
                            <div class="single-news-items wow fadeInUp" data-wow-delay=".5s">
                                <div class="news-content">
                                    <ul class="post-date">
                                        <li>
                                            <i class="fas fa-calendar-alt"></i>
                                            jan 28, 2024 <span>/ronald</span>
                                        </li>
                                    </ul>
                                    <h5>
                                        <a href="news-details.html">
                                        A digital representation of the physical and functional
                                        </a>
                                    </h5>
                                </div>
                            </div>
                            <div class="single-news-items wow fadeInUp" data-wow-delay=".7s">
                                <div class="news-content border-none">
                                    <ul class="post-date">
                                        <li>
                                            <i class="fas fa-calendar-alt"></i>
                                            jan 28, 2024 <span>/ronald</span>
                                        </li>
                                    </ul>
                                    <h5>
                                        <a href="news-details.html">
                                        Skilled labor is often in high demand & short supply
                                        </a>
                                    </h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Footer Section Start -->
        <footer class="footer-section fix">
            <div class="footer-widgets-wrapper section-bg-2">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-4 col-lg-5 col-md-7 wow fadeInUp" data-wow-delay=".3s">
                            <div class="single-footer-widget pe-md-5">
                                <div class="widget-head">
                                    <h4>
                                        <img src="public/assets/img/icon/icon.png" alt="icon">
                                        Essential
                                    </h4>
                                </div>
                                <div class="list-items d-flex justify-content-between">
                                    <ul>
                                        <li>
                                            <a href="#">
                                            <i class="fas fa-chevron-right"></i>
                                            Home
                                            </a>
                                        </li>
                                        <li>
                                            <a href="about.html">
                                            <i class="fas fa-chevron-right"></i>
                                            About Us
                                            </a>
                                        </li>
                                        <li>
                                            <a href="contact.html">
                                            <i class="fas fa-chevron-right"></i>
                                            Contact Us
                                            </a>
                                        </li>
                                        <li>
                                            <a href="news.html">
                                            <i class="fas fa-chevron-right"></i>
                                            Blog
                                            </a>
                                        </li>
                                        <li>
                                            <a href="checkout.html">
                                            <i class="fas fa-chevron-right"></i>
                                            Payment
                                            </a>
                                        </li>
                                        <li>
                                            <a href="faq.html">
                                            <i class="fas fa-chevron-right"></i>
                                            FAQ
                                            </a>
                                        </li>
                                    </ul>
                                    <ul>
                                        <li>
                                            <a href="about.html">
                                            <i class="fas fa-chevron-right"></i>
                                            Refund Policy
                                            </a>
                                        </li>
                                        <li>
                                            <a href="about.html">
                                            <i class="fas fa-chevron-right"></i>
                                            Terms & Conditions
                                            </a>
                                        </li>
                                        <li>
                                            <a href="about.html">
                                            <i class="fas fa-chevron-right"></i>
                                            Privacy Policy
                                            </a>
                                        </li>
                                        <li>
                                            <a href="about.html">
                                            <i class="fas fa-chevron-right"></i>
                                            Careers
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-5 ps-md-5 wow fadeInUp" data-wow-delay=".5s">
                            <div class="single-footer-widget">
                                <div class="widget-head">
                                    <h4>
                                        <img src="public/assets/img/icon/icon.png" alt="icon">
                                        Services
                                    </h4>
                                </div>
                                <ul class="list">
                                    <li>
                                        <a href="service-details.html">
                                        <i class="fas fa-chevron-right"></i>
                                        Residential Construction
                                        </a>
                                    </li>
                                    <li>
                                        <a href="service-details.html">
                                        <i class="fas fa-chevron-right"></i>
                                        Commercial Construction
                                        </a>
                                    </li>
                                    <li>
                                        <a href="service-details.html">
                                        <i class="fas fa-chevron-right"></i>
                                        Industrial Construction
                                        </a>
                                    </li>
                                    <li>
                                        <a href="service-details.html">
                                        <i class="fas fa-chevron-right"></i>
                                        Infrastructure Construction
                                        </a>
                                    </li>
                                    <li>
                                        <a href="service-details.html">
                                        <i class="fas fa-chevron-right"></i>
                                        Pre-construction
                                        </a>
                                    </li>
                                    <li>
                                        <a href="service-details.html">
                                        <i class="fas fa-chevron-right"></i>
                                        General Contractors
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-xl-5 col-lg-8 col-md-7 ps-xl-5 wow fadeInUp" data-wow-delay=".7s">
                            <div class="single-footer-widget">
                                <div class="footer-contact-items">
                                    <div class="contact-content">
                                        <h4>
                                            <img src="public/assets/img/icon/icon-2.png" alt="icon">
                                            Get Updates
                                        </h4>
                                        <p>
                                            This involves interactions between a business and its customers. It's about meeting customers' needs
                                        </p>
                                        <div class="row g-3">
                                            <div class="col-lg-6">
                                                <div class="footer-input">
                                                    <div class="icon">
                                                        <i class="fas fa-user"></i>
                                                    </div>
                                                    <input type="text" placeholder="full name">
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="footer-input">
                                                    <div class="icon">
                                                        <i class="fas fa-envelope-open"></i>
                                                    </div>
                                                    <input type="email" placeholder=" email address">
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <button class="theme-btn bg-color-3" type="submit">
                                                <span class="theme-effect">
                                                <span class="effect-1"><i class="fas fa-chevron-right"></i>subscribe now</span>
                                                <span class="effect-1"><i class="fas fa-chevron-right"></i>subscribe now</span>
                                                </span>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="social-icon-items section-bg-2">
                <div class="social-icon wow fadeInUp" data-wow-delay=".2s">
                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                    <h6><a href="#">Facebook</a></h6>
                </div>
                <div class="social-icon wow fadeInUp" data-wow-delay=".4s">
                    <a href="#"><i class="fab fa-twitter-square"></i></a>
                    <h6><a href="#">Twitter</a></h6>
                </div>
                <div class="social-icon wow fadeInUp" data-wow-delay=".6s">
                    <a href="#"><i class="fab fa-youtube"></i></a>
                    <h6><a href="#">Youtube</a></h6>
                </div>
                <div class="social-icon wow fadeInUp" data-wow-delay=".8s">
                    <a href="#"><i class="fab fa-behance"></i></a>
                    <h6><a href="#">Behance</a></h6>
                </div>
                <div class="social-icon wow fadeInUp" data-wow-delay=".9s">
                    <a href="#"><i class="fab fa-linkedin"></i></a>
                    <h6><a href="#">Linkedin</a></h6>
                </div>
            </div>
            <div class="footer-bottom">
                <div class="container">
                    <div class="footer-bottom-wrapper">
                        <p class="wow fadeInUp" data-wow-delay=".3s">
                            &copy; copyright & design by <a href="#">@Ali-Ayaz</a> - 2025
                        </p>
                        <div class="footer-logo wow fadeInUp" data-wow-delay=".5s">
                            <a href="#">
                            <img src="public/assets/img/logo/n-footer-logo.png" alt="footer-logo">
                            </a>
                        </div>
                        <ul class="footer-menu wow fadeInUp" data-wow-delay=".7s">
                            <li>
                                <a href="faq.html">
                                faq    
                                </a>
                            </li>
                            <li>
                                <a href="about.html">
                                t & C 
                                </a>
                            </li>
                            <li>
                                <a href="contact.html">
                                Get In touch
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </footer>

        <!-- Back To Top Start -->
        <div class="scroll-up">
            <svg class="scroll-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
                <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
            </svg>
        </div>
        
        <!--<< Jquery Latest >>-->
        <script src="public/assets/js/jquery-3.7.1.min.js"></script>
        <!--<< Viewport Js >>-->
        <script src="public/assets/js/viewport.jquery.js"></script>
        <!--<< Bootstrap Js >>-->
        <script src="public/assets/js/bootstrap.bundle.min.js"></script>
        <!--<< Nice Select Js >>-->
        <script src="public/assets/js/jquery.nice-select.min.js"></script>
        <!--<< Waypoints Js >>-->
        <script src="public/assets/js/jquery.waypoints.js"></script>
        <!--<< Counterup Js >>-->
        <script src="public/assets/js/jquery.counterup.min.js"></script>
        <!--<< Swiper Slider Js >>-->
        <script src="public/assets/js/swiper-bundle.min.js"></script>
        <!--<< MeanMenu Js >>-->
        <script src="public/assets/js/jquery.meanmenu.min.js"></script>
        <!--<< Magnific Popup Js >>-->
        <script src="public/assets/js/jquery.magnific-popup.min.js"></script>
        <!--<< Wow Animation Js >>-->
        <script src="public/assets/js/wow.min.js"></script>
        <!--<< Main.js >>-->
        <script src="public/assets/js/main.js"></script>
    </body>
</html>
