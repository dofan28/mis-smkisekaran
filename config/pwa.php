<?php

return [

  /*
    |--------------------------------------------------------------------------
    | Would you like the install button to appear on all pages?
      Set true/false
    |--------------------------------------------------------------------------
    */

  'install-button' => true,

  /*
    |--------------------------------------------------------------------------
    | PWA Manifest Configuration
    |--------------------------------------------------------------------------
    |  php artisan erag:pwa-update-manifest
    */

  'manifest' => [
    'name' => 'SMK ISLAM SEKARAN',
    'short_name' => 'SMKISKRN',
    'theme_color' => '#333333',
    'background_color' => '#ffffff',
    'orientation' => 'portrait',
    'start_url' => '/articles',
    'display' => 'fullscreen',
    'description' => 'Sebuah aplikasi web progresif untuk SMK Islam Sekaran yang memberikan pengalaman pengguna layaknya aplikasi native.',
    'icons' => [
      [
        "src" => "/img_pwa/windows11/SmallTile.scale-100.png",
        "sizes" => "71x71"
      ],
      [
        "src" => "/img_pwa/windows11/SmallTile.scale-125.png",
        "sizes" => "89x89"
      ],
      [
        "src" => "/img_pwa/windows11/SmallTile.scale-150.png",
        "sizes" => "107x107"
      ],
      [
        "src" => "/img_pwa/windows11/SmallTile.scale-200.png",
        "sizes" => "142x142"
      ],
      [
        "src" => "/img_pwa/windows11/SmallTile.scale-400.png",
        "sizes" => "284x284"
      ],
      [
        "src" => "/img_pwa/windows11/Square150x150Logo.scale-100.png",
        "sizes" => "150x150"
      ],
      [
        "src" => "/img_pwa/windows11/Square150x150Logo.scale-125.png",
        "sizes" => "188x188"
      ],
      [
        "src" => "/img_pwa/windows11/Square150x150Logo.scale-150.png",
        "sizes" => "225x225"
      ],
      [
        "src" => "/img_pwa/windows11/Square150x150Logo.scale-200.png",
        "sizes" => "300x300"
      ],
      [
        "src" => "/img_pwa/windows11/Square150x150Logo.scale-400.png",
        "sizes" => "600x600"
      ],
      [
        "src" => "/img_pwa/windows11/Wide310x150Logo.scale-100.png",
        "sizes" => "310x150"
      ],
      [
        "src" => "/img_pwa/windows11/Wide310x150Logo.scale-125.png",
        "sizes" => "388x188"
      ],
      [
        "src" => "/img_pwa/windows11/Wide310x150Logo.scale-150.png",
        "sizes" => "465x225"
      ],
      [
        "src" => "/img_pwa/windows11/Wide310x150Logo.scale-200.png",
        "sizes" => "620x300"
      ],
      [
        "src" => "/img_pwa/windows11/Wide310x150Logo.scale-400.png",
        "sizes" => "1240x600"
      ],
      [
        "src" => "/img_pwa/windows11/LargeTile.scale-100.png",
        "sizes" => "310x310"
      ],
      [
        "src" => "/img_pwa/windows11/LargeTile.scale-125.png",
        "sizes" => "388x388"
      ],
      [
        "src" => "/img_pwa/windows11/LargeTile.scale-150.png",
        "sizes" => "465x465"
      ],
      [
        "src" => "/img_pwa/windows11/LargeTile.scale-200.png",
        "sizes" => "620x620"
      ],
      [
        "src" => "/img_pwa/windows11/LargeTile.scale-400.png",
        "sizes" => "1240x1240"
      ],
      [
        "src" => "/img_pwa/windows11/Square44x44Logo.scale-100.png",
        "sizes" => "44x44"
      ],
      [
        "src" => "/img_pwa/windows11/Square44x44Logo.scale-125.png",
        "sizes" => "55x55"
      ],
      [
        "src" => "/img_pwa/windows11/Square44x44Logo.scale-150.png",
        "sizes" => "66x66"
      ],
      [
        "src" => "/img_pwa/windows11/Square44x44Logo.scale-200.png",
        "sizes" => "88x88"
      ],
      [
        "src" => "/img_pwa/windows11/Square44x44Logo.scale-400.png",
        "sizes" => "176x176"
      ],
      [
        "src" => "/img_pwa/windows11/StoreLogo.scale-100.png",
        "sizes" => "50x50"
      ],
      [
        "src" => "/img_pwa/windows11/StoreLogo.scale-125.png",
        "sizes" => "63x63"
      ],
      [
        "src" => "/img_pwa/windows11/StoreLogo.scale-150.png",
        "sizes" => "75x75"
      ],
      [
        "src" => "/img_pwa/windows11/StoreLogo.scale-200.png",
        "sizes" => "100x100"
      ],
      [
        "src" => "/img_pwa/windows11/StoreLogo.scale-400.png",
        "sizes" => "200x200"
      ],
      [
        "src" => "/img_pwa/windows11/SplashScreen.scale-100.png",
        "sizes" => "620x300"
      ],
      [
        "src" => "/img_pwa/windows11/SplashScreen.scale-125.png",
        "sizes" => "775x375"
      ],
      [
        "src" => "/img_pwa/windows11/SplashScreen.scale-150.png",
        "sizes" => "930x450"
      ],
      [
        "src" => "/img_pwa/windows11/SplashScreen.scale-200.png",
        "sizes" => "1240x600"
      ],
      [
        "src" => "/img_pwa/windows11/SplashScreen.scale-400.png",
        "sizes" => "2480x1200"
      ],
      [
        "src" => "/img_pwa/windows11/Square44x44Logo.targetsize-16.png",
        "sizes" => "16x16"
      ],
      [
        "src" => "/img_pwa/windows11/Square44x44Logo.targetsize-20.png",
        "sizes" => "20x20"
      ],
      [
        "src" => "/img_pwa/windows11/Square44x44Logo.targetsize-24.png",
        "sizes" => "24x24"
      ],
      [
        "src" => "/img_pwa/windows11/Square44x44Logo.targetsize-30.png",
        "sizes" => "30x30"
      ],
      [
        "src" => "/img_pwa/windows11/Square44x44Logo.targetsize-32.png",
        "sizes" => "32x32"
      ],
      [
        "src" => "/img_pwa/windows11/Square44x44Logo.targetsize-36.png",
        "sizes" => "36x36"
      ],
      [
        "src" => "/img_pwa/windows11/Square44x44Logo.targetsize-40.png",
        "sizes" => "40x40"
      ],
      [
        "src" => "/img_pwa/windows11/Square44x44Logo.targetsize-44.png",
        "sizes" => "44x44"
      ],
      [
        "src" => "/img_pwa/windows11/Square44x44Logo.targetsize-48.png",
        "sizes" => "48x48"
      ],
      [
        "src" => "/img_pwa/windows11/Square44x44Logo.targetsize-60.png",
        "sizes" => "60x60"
      ],
      [
        "src" => "/img_pwa/windows11/Square44x44Logo.targetsize-64.png",
        "sizes" => "64x64"
      ],
      [
        "src" => "/img_pwa/windows11/Square44x44Logo.targetsize-72.png",
        "sizes" => "72x72"
      ],
      [
        "src" => "/img_pwa/windows11/Square44x44Logo.targetsize-80.png",
        "sizes" => "80x80"
      ],
      [
        "src" => "/img_pwa/windows11/Square44x44Logo.targetsize-96.png",
        "sizes" => "96x96"
      ],
      [
        "src" => "/img_pwa/windows11/Square44x44Logo.targetsize-256.png",
        "sizes" => "256x256"
      ],
      [
        "src" => "/img_pwa/windows11/Square44x44Logo.altform-unplated_targetsize-16.png",
        "sizes" => "16x16"
      ],
      [
        "src" => "/img_pwa/windows11/Square44x44Logo.altform-unplated_targetsize-20.png",
        "sizes" => "20x20"
      ],
      [
        "src" => "/img_pwa/windows11/Square44x44Logo.altform-unplated_targetsize-24.png",
        "sizes" => "24x24"
      ],
      [
        "src" => "/img_pwa/windows11/Square44x44Logo.altform-unplated_targetsize-30.png",
        "sizes" => "30x30"
      ],
      [
        "src" => "/img_pwa/windows11/Square44x44Logo.altform-unplated_targetsize-32.png",
        "sizes" => "32x32"
      ],
      [
        "src" => "/img_pwa/windows11/Square44x44Logo.altform-unplated_targetsize-36.png",
        "sizes" => "36x36"
      ],
      [
        "src" => "/img_pwa/windows11/Square44x44Logo.altform-unplated_targetsize-40.png",
        "sizes" => "40x40"
      ],
      [
        "src" => "/img_pwa/windows11/Square44x44Logo.altform-unplated_targetsize-44.png",
        "sizes" => "44x44"
      ],
      [
        "src" => "/img_pwa/windows11/Square44x44Logo.altform-unplated_targetsize-48.png",
        "sizes" => "48x48"
      ],
      [
        "src" => "/img_pwa/windows11/Square44x44Logo.altform-unplated_targetsize-60.png",
        "sizes" => "60x60"
      ],
      [
        "src" => "/img_pwa/windows11/Square44x44Logo.altform-unplated_targetsize-64.png",
        "sizes" => "64x64"
      ],
      [
        "src" => "/img_pwa/windows11/Square44x44Logo.altform-unplated_targetsize-72.png",
        "sizes" => "72x72"
      ],
      [
        "src" => "/img_pwa/windows11/Square44x44Logo.altform-unplated_targetsize-80.png",
        "sizes" => "80x80"
      ],
      [
        "src" => "/img_pwa/windows11/Square44x44Logo.altform-unplated_targetsize-96.png",
        "sizes" => "96x96"
      ],
      [
        "src" => "/img_pwa/windows11/Square44x44Logo.altform-unplated_targetsize-256.png",
        "sizes" => "256x256"
      ],
      [
        "src" => "/img_pwa/windows11/Square44x44Logo.altform-lightunplated_targetsize-16.png",
        "sizes" => "16x16"
      ],
      [
        "src" => "/img_pwa/windows11/Square44x44Logo.altform-lightunplated_targetsize-20.png",
        "sizes" => "20x20"
      ],
      [
        "src" => "/img_pwa/windows11/Square44x44Logo.altform-lightunplated_targetsize-24.png",
        "sizes" => "24x24"
      ],
      [
        "src" => "/img_pwa/windows11/Square44x44Logo.altform-lightunplated_targetsize-30.png",
        "sizes" => "30x30"
      ],
      [
        "src" => "/img_pwa/windows11/Square44x44Logo.altform-lightunplated_targetsize-32.png",
        "sizes" => "32x32"
      ],
      [
        "src" => "/img_pwa/windows11/Square44x44Logo.altform-lightunplated_targetsize-36.png",
        "sizes" => "36x36"
      ],
      [
        "src" => "/img_pwa/windows11/Square44x44Logo.altform-lightunplated_targetsize-40.png",
        "sizes" => "40x40"
      ],
      [
        "src" => "/img_pwa/windows11/Square44x44Logo.altform-lightunplated_targetsize-44.png",
        "sizes" => "44x44"
      ],
      [
        "src" => "/img_pwa/windows11/Square44x44Logo.altform-lightunplated_targetsize-48.png",
        "sizes" => "48x48"
      ],
      [
        "src" => "/img_pwa/windows11/Square44x44Logo.altform-lightunplated_targetsize-60.png",
        "sizes" => "60x60"
      ],
      [
        "src" => "/img_pwa/windows11/Square44x44Logo.altform-lightunplated_targetsize-64.png",
        "sizes" => "64x64"
      ],
      [
        "src" => "/img_pwa/windows11/Square44x44Logo.altform-lightunplated_targetsize-72.png",
        "sizes" => "72x72"
      ],
      [
        "src" => "/img_pwa/windows11/Square44x44Logo.altform-lightunplated_targetsize-80.png",
        "sizes" => "80x80"
      ],
      [
        "src" => "/img_pwa/windows11/Square44x44Logo.altform-lightunplated_targetsize-96.png",
        "sizes" => "96x96"
      ],
      [
        "src" => "/img_pwa/windows11/Square44x44Logo.altform-lightunplated_targetsize-256.png",
        "sizes" => "256x256"
      ],
      [
        "src" => "/img_pwa/android/android-launchericon-512-512.png",
        "sizes" => "512x512"
      ],
      [
        "src" => "/img_pwa/android/android-launchericon-192-192.png",
        "sizes" => "192x192"
      ],
      [
        "src" => "/img_pwa/android/android-launchericon-144-144.png",
        "sizes" => "144x144"
      ],
      [
        "src" => "/img_pwa/android/android-launchericon-96-96.png",
        "sizes" => "96x96"
      ],
      [
        "src" => "/img_pwa/android/android-launchericon-72-72.png",
        "sizes" => "72x72"
      ],
      [
        "src" => "/img_pwa/android/android-launchericon-48-48.png",
        "sizes" => "48x48"
      ],
      [
        "src" => "/img_pwa/ios/16.png",
        "sizes" => "16x16"
      ],
      [
        "src" => "/img_pwa/ios/20.png",
        "sizes" => "20x20"
      ],
      [
        "src" => "/img_pwa/ios/29.png",
        "sizes" => "29x29"
      ],
      [
        "src" => "/img_pwa/ios/32.png",
        "sizes" => "32x32"
      ],
      [
        "src" => "/img_pwa/ios/40.png",
        "sizes" => "40x40"
      ],
      [
        "src" => "/img_pwa/ios/50.png",
        "sizes" => "50x50"
      ],
      [
        "src" => "/img_pwa/ios/57.png",
        "sizes" => "57x57"
      ],
      [
        "src" => "/img_pwa/ios/58.png",
        "sizes" => "58x58"
      ],
      [
        "src" => "/img_pwa/ios/60.png",
        "sizes" => "60x60"
      ],
      [
        "src" => "/img_pwa/ios/64.png",
        "sizes" => "64x64"
      ],
      [
        "src" => "/img_pwa/ios/72.png",
        "sizes" => "72x72"
      ],
      [
        "src" => "/img_pwa/ios/76.png",
        "sizes" => "76x76"
      ],
      [
        "src" => "/img_pwa/ios/80.png",
        "sizes" => "80x80"
      ],
      [
        "src" => "/img_pwa/ios/87.png",
        "sizes" => "87x87"
      ],
      [
        "src" => "/img_pwa/ios/100.png",
        "sizes" => "100x100"
      ],
      [
        "src" => "/img_pwa/ios/114.png",
        "sizes" => "114x114"
      ],
      [
        "src" => "/img_pwa/ios/120.png",
        "sizes" => "120x120"
      ],
      [
        "src" => "/img_pwa/ios/128.png",
        "sizes" => "128x128"
      ],
      [
        "src" => "/img_pwa/ios/144.png",
        "sizes" => "144x144"
      ],
      [
        "src" => "/img_pwa/ios/152.png",
        "sizes" => "152x152"
      ],
      [
        "src" => "/img_pwa/ios/167.png",
        "sizes" => "167x167"
      ],
      [
        "src" => "/img_pwa/ios/180.png",
        "sizes" => "180x180"
      ],
      [
        "src" => "/img_pwa/ios/192.png",
        "sizes" => "192x192"
      ],
      [
        "src" => "/img_pwa/ios/256.png",
        "sizes" => "256x256"
      ],
      [
        "src" => "/img_pwa/ios/512.png",
        "sizes" => "512x512"
      ],
      [
        "src" => "/img_pwa/ios/1024.png",
        "sizes" => "1024x1024"
      ],
      [
        "src" => "/img_pwa/windows11/SmallTile.scale-100.png",
        "sizes" => "71x71",
        "purpose" => "maskable"
      ],
      [
        "src" => "/img_pwa/windows11/SmallTile.scale-125.png",
        "sizes" => "89x89",
        "purpose" => "maskable"
      ],
      [
        "src" => "/img_pwa/windows11/SmallTile.scale-150.png",
        "sizes" => "107x107",
        "purpose" => "maskable"
      ],
      [
        "src" => "/img_pwa/windows11/SmallTile.scale-200.png",
        "sizes" => "142x142",
        "purpose" => "maskable"
      ],
      [
        "src" => "/img_pwa/windows11/SmallTile.scale-400.png",
        "sizes" => "284x284",
        "purpose" => "maskable"
      ],
      [
        "src" => "/img_pwa/windows11/Square150x150Logo.scale-100.png",
        "sizes" => "150x150",
        "purpose" => "maskable"
      ],
      [
        "src" => "/img_pwa/windows11/Square150x150Logo.scale-125.png",
        "sizes" => "188x188",
        "purpose" => "maskable"
      ],
      [
        "src" => "/img_pwa/windows11/Square150x150Logo.scale-150.png",
        "sizes" => "225x225",
        "purpose" => "maskable"
      ],
      [
        "src" => "/img_pwa/windows11/Square150x150Logo.scale-200.png",
        "sizes" => "300x300",
        "purpose" => "maskable"
      ],
      [
        "src" => "/img_pwa/windows11/Square150x150Logo.scale-400.png",
        "sizes" => "600x600",
        "purpose" => "maskable"
      ],
      [
        "src" => "/img_pwa/windows11/Wide310x150Logo.scale-100.png",
        "sizes" => "310x150",
        "purpose" => "maskable"
      ],
      [
        "src" => "/img_pwa/windows11/Wide310x150Logo.scale-125.png",
        "sizes" => "388x188",
        "purpose" => "maskable"
      ],
      [
        "src" => "/img_pwa/windows11/Wide310x150Logo.scale-150.png",
        "sizes" => "465x225",
        "purpose" => "maskable"
      ],
      [
        "src" => "/img_pwa/windows11/Wide310x150Logo.scale-200.png",
        "sizes" => "620x300",
        "purpose" => "maskable"
      ],
      [
        "src" => "/img_pwa/windows11/Wide310x150Logo.scale-400.png",
        "sizes" => "1240x600",
        "purpose" => "maskable"
      ],
      [
        "src" => "/img_pwa/windows11/LargeTile.scale-100.png",
        "sizes" => "310x310",
        "purpose" => "maskable"
      ],
      [
        "src" => "/img_pwa/windows11/LargeTile.scale-125.png",
        "sizes" => "388x388",
        "purpose" => "maskable"
      ],
      [
        "src" => "/img_pwa/windows11/LargeTile.scale-150.png",
        "sizes" => "465x465",
        "purpose" => "maskable"
      ],
      [
        "src" => "/img_pwa/windows11/LargeTile.scale-200.png",
        "sizes" => "620x620",
        "purpose" => "maskable"
      ],
      [
        "src" => "/img_pwa/windows11/LargeTile.scale-400.png",
        "sizes" => "1240x1240",
        "purpose" => "maskable"
      ],
      [
        "src" => "/img_pwa/windows11/Square44x44Logo.scale-100.png",
        "sizes" => "44x44",
        "purpose" => "maskable"
      ],
      [
        "src" => "/img_pwa/windows11/Square44x44Logo.scale-125.png",
        "sizes" => "55x55",
        "purpose" => "maskable"
      ],
      [
        "src" => "/img_pwa/windows11/Square44x44Logo.scale-150.png",
        "sizes" => "66x66",
        "purpose" => "maskable"
      ],
      [
        "src" => "/img_pwa/windows11/Square44x44Logo.scale-200.png",
        "sizes" => "88x88",
        "purpose" => "maskable"
      ],
      [
        "src" => "/img_pwa/windows11/Square44x44Logo.scale-400.png",
        "sizes" => "176x176",
        "purpose" => "maskable"
      ],
      [
        "src" => "/img_pwa/windows11/StoreLogo.scale-100.png",
        "sizes" => "50x50",
        "purpose" => "maskable"
      ],
      [
        "src" => "/img_pwa/windows11/StoreLogo.scale-125.png",
        "sizes" => "63x63",
        "purpose" => "maskable"
      ],
      [
        "src" => "/img_pwa/windows11/StoreLogo.scale-150.png",
        "sizes" => "75x75",
        "purpose" => "maskable"
      ],
      [
        "src" => "/img_pwa/windows11/StoreLogo.scale-200.png",
        "sizes" => "100x100",
        "purpose" => "maskable"
      ],
      [
        "src" => "/img_pwa/windows11/StoreLogo.scale-400.png",
        "sizes" => "200x200",
        "purpose" => "maskable"
      ],
      [
        "src" => "/img_pwa/windows11/SplashScreen.scale-100.png",
        "sizes" => "620x300",
        "purpose" => "maskable"
      ],
      [
        "src" => "/img_pwa/windows11/SplashScreen.scale-125.png",
        "sizes" => "775x375",
        "purpose" => "maskable"
      ],
      [
        "src" => "/img_pwa/windows11/SplashScreen.scale-150.png",
        "sizes" => "930x450",
        "purpose" => "maskable"
      ],
      [
        "src" => "/img_pwa/windows11/SplashScreen.scale-200.png",
        "sizes" => "1240x600",
        "purpose" => "maskable"
      ],
      [
        "src" => "/img_pwa/windows11/SplashScreen.scale-400.png",
        "sizes" => "2480x1200",
        "purpose" => "maskable"
      ],
      [
        "src" => "/img_pwa/windows11/Square44x44Logo.targetsize-16.png",
        "sizes" => "16x16",
        "purpose" => "maskable"
      ],
      [
        "src" => "/img_pwa/windows11/Square44x44Logo.targetsize-20.png",
        "sizes" => "20x20",
        "purpose" => "maskable"
      ],
      [
        "src" => "/img_pwa/windows11/Square44x44Logo.targetsize-24.png",
        "sizes" => "24x24",
        "purpose" => "maskable"
      ],
      [
        "src" => "/img_pwa/windows11/Square44x44Logo.targetsize-30.png",
        "sizes" => "30x30",
        "purpose" => "maskable"
      ],
      [
        "src" => "/img_pwa/windows11/Square44x44Logo.targetsize-32.png",
        "sizes" => "32x32",
        "purpose" => "maskable"
      ],
      [
        "src" => "/img_pwa/windows11/Square44x44Logo.targetsize-36.png",
        "sizes" => "36x36",
        "purpose" => "maskable"
      ],
      [
        "src" => "/img_pwa/windows11/Square44x44Logo.targetsize-40.png",
        "sizes" => "40x40",
        "purpose" => "maskable"
      ],
      [
        "src" => "/img_pwa/windows11/Square44x44Logo.targetsize-44.png",
        "sizes" => "44x44",
        "purpose" => "maskable"
      ],
      [
        "src" => "/img_pwa/windows11/Square44x44Logo.targetsize-48.png",
        "sizes" => "48x48",
        "purpose" => "maskable"
      ],
      [
        "src" => "/img_pwa/windows11/Square44x44Logo.targetsize-60.png",
        "sizes" => "60x60",
        "purpose" => "maskable"
      ],
      [
        "src" => "/img_pwa/windows11/Square44x44Logo.targetsize-64.png",
        "sizes" => "64x64",
        "purpose" => "maskable"
      ],
      [
        "src" => "/img_pwa/windows11/Square44x44Logo.targetsize-72.png",
        "sizes" => "72x72",
        "purpose" => "maskable"
      ],
      [
        "src" => "/img_pwa/windows11/Square44x44Logo.targetsize-80.png",
        "sizes" => "80x80",
        "purpose" => "maskable"
      ],
      [
        "src" => "/img_pwa/windows11/Square44x44Logo.targetsize-96.png",
        "sizes" => "96x96",
        "purpose" => "maskable"
      ],
      [
        "src" => "/img_pwa/windows11/Square44x44Logo.targetsize-256.png",
        "sizes" => "256x256",
        "purpose" => "maskable"
      ],
      [
        "src" => "/img_pwa/windows11/Square44x44Logo.altform-unplated_targetsize-16.png",
        "sizes" => "16x16",
        "purpose" => "maskable"
      ],
      [
        "src" => "/img_pwa/windows11/Square44x44Logo.altform-unplated_targetsize-20.png",
        "sizes" => "20x20",
        "purpose" => "maskable"
      ],
      [
        "src" => "/img_pwa/windows11/Square44x44Logo.altform-unplated_targetsize-24.png",
        "sizes" => "24x24",
        "purpose" => "maskable"
      ],
      [
        "src" => "/img_pwa/windows11/Square44x44Logo.altform-unplated_targetsize-30.png",
        "sizes" => "30x30",
        "purpose" => "maskable"
      ],
      [
        "src" => "/img_pwa/windows11/Square44x44Logo.altform-unplated_targetsize-32.png",
        "sizes" => "32x32",
        "purpose" => "maskable"
      ],
      [
        "src" => "/img_pwa/windows11/Square44x44Logo.altform-unplated_targetsize-36.png",
        "sizes" => "36x36",
        "purpose" => "maskable"
      ],
      [
        "src" => "/img_pwa/windows11/Square44x44Logo.altform-unplated_targetsize-40.png",
        "sizes" => "40x40",
        "purpose" => "maskable"
      ],
      [
        "src" => "/img_pwa/windows11/Square44x44Logo.altform-unplated_targetsize-44.png",
        "sizes" => "44x44",
        "purpose" => "maskable"
      ],
      [
        "src" => "/img_pwa/windows11/Square44x44Logo.altform-unplated_targetsize-48.png",
        "sizes" => "48x48",
        "purpose" => "maskable"
      ],
      [
        "src" => "/img_pwa/windows11/Square44x44Logo.altform-unplated_targetsize-60.png",
        "sizes" => "60x60",
        "purpose" => "maskable"
      ],
      [
        "src" => "/img_pwa/windows11/Square44x44Logo.altform-unplated_targetsize-64.png",
        "sizes" => "64x64",
        "purpose" => "maskable"
      ],
      [
        "src" => "/img_pwa/windows11/Square44x44Logo.altform-unplated_targetsize-72.png",
        "sizes" => "72x72",
        "purpose" => "maskable"
      ],
      [
        "src" => "/img_pwa/windows11/Square44x44Logo.altform-unplated_targetsize-80.png",
        "sizes" => "80x80",
        "purpose" => "maskable"
      ],
      [
        "src" => "/img_pwa/windows11/Square44x44Logo.altform-unplated_targetsize-96.png",
        "sizes" => "96x96",
        "purpose" => "maskable"
      ],
      [
        "src" => "/img_pwa/windows11/Square44x44Logo.altform-unplated_targetsize-256.png",
        "sizes" => "256x256",
        "purpose" => "maskable"
      ],
      [
        "src" => "/img_pwa/windows11/Square44x44Logo.altform-lightunplated_targetsize-16.png",
        "sizes" => "16x16",
        "purpose" => "maskable"
      ],
      [
        "src" => "/img_pwa/windows11/Square44x44Logo.altform-lightunplated_targetsize-20.png",
        "sizes" => "20x20",
        "purpose" => "maskable"
      ],
      [
        "src" => "/img_pwa/windows11/Square44x44Logo.altform-lightunplated_targetsize-24.png",
        "sizes" => "24x24",
        "purpose" => "maskable"
      ],
      [
        "src" => "/img_pwa/windows11/Square44x44Logo.altform-lightunplated_targetsize-30.png",
        "sizes" => "30x30",
        "purpose" => "maskable"
      ],
      [
        "src" => "/img_pwa/windows11/Square44x44Logo.altform-lightunplated_targetsize-32.png",
        "sizes" => "32x32",
        "purpose" => "maskable"
      ],
      [
        "src" => "/img_pwa/windows11/Square44x44Logo.altform-lightunplated_targetsize-36.png",
        "sizes" => "36x36",
        "purpose" => "maskable"
      ],
      [
        "src" => "/img_pwa/windows11/Square44x44Logo.altform-lightunplated_targetsize-40.png",
        "sizes" => "40x40",
        "purpose" => "maskable"
      ],
      [
        "src" => "/img_pwa/windows11/Square44x44Logo.altform-lightunplated_targetsize-44.png",
        "sizes" => "44x44",
        "purpose" => "maskable"
      ],
      [
        "src" => "/img_pwa/windows11/Square44x44Logo.altform-lightunplated_targetsize-48.png",
        "sizes" => "48x48",
        "purpose" => "maskable"
      ],
      [
        "src" => "/img_pwa/windows11/Square44x44Logo.altform-lightunplated_targetsize-60.png",
        "sizes" => "60x60",
        "purpose" => "maskable"
      ],
      [
        "src" => "/img_pwa/windows11/Square44x44Logo.altform-lightunplated_targetsize-64.png",
        "sizes" => "64x64",
        "purpose" => "maskable"
      ],
      [
        "src" => "/img_pwa/windows11/Square44x44Logo.altform-lightunplated_targetsize-72.png",
        "sizes" => "72x72",
        "purpose" => "maskable"
      ],
      [
        "src" => "/img_pwa/windows11/Square44x44Logo.altform-lightunplated_targetsize-80.png",
        "sizes" => "80x80",
        "purpose" => "maskable"
      ],
      [
        "src" => "/img_pwa/windows11/Square44x44Logo.altform-lightunplated_targetsize-96.png",
        "sizes" => "96x96",
        "purpose" => "maskable"
      ],
      [
        "src" => "/img_pwa/windows11/Square44x44Logo.altform-lightunplated_targetsize-256.png",
        "sizes" => "256x256",
        "purpose" => "maskable"
      ],
      [
        "src" => "/img_pwa/android/android-launchericon-512-512.png",
        "sizes" => "512x512",
        "purpose" => "maskable"
      ],
      [
        "src" => "/img_pwa/android/android-launchericon-192-192.png",
        "sizes" => "192x192",
        "purpose" => "maskable"
      ],
      [
        "src" => "/img_pwa/android/android-launchericon-144-144.png",
        "sizes" => "144x144",
        "purpose" => "maskable"
      ],
      [
        "src" => "/img_pwa/android/android-launchericon-96-96.png",
        "sizes" => "96x96",
        "purpose" => "maskable"
      ],
      [
        "src" => "/img_pwa/android/android-launchericon-72-72.png",
        "sizes" => "72x72",
        "purpose" => "maskable"
      ],
      [
        "src" => "/img_pwa/android/android-launchericon-48-48.png",
        "sizes" => "48x48",
        "purpose" => "maskable"
      ],
      [
        "src" => "/img_pwa/ios/16.png",
        "sizes" => "16x16",
        "purpose" => "maskable"
      ],
      [
        "src" => "/img_pwa/ios/20.png",
        "sizes" => "20x20",
        "purpose" => "maskable"
      ],
      [
        "src" => "/img_pwa/ios/29.png",
        "sizes" => "29x29",
        "purpose" => "maskable"
      ],
      [
        "src" => "/img_pwa/ios/32.png",
        "sizes" => "32x32",
        "purpose" => "maskable"
      ],
      [
        "src" => "/img_pwa/ios/40.png",
        "sizes" => "40x40",
        "purpose" => "maskable"
      ],
      [
        "src" => "/img_pwa/ios/50.png",
        "sizes" => "50x50",
        "purpose" => "maskable"
      ],
      [
        "src" => "/img_pwa/ios/57.png",
        "sizes" => "57x57",
        "purpose" => "maskable"
      ],
      [
        "src" => "/img_pwa/ios/58.png",
        "sizes" => "58x58",
        "purpose" => "maskable"
      ],
      [
        "src" => "/img_pwa/ios/60.png",
        "sizes" => "60x60",
        "purpose" => "maskable"
      ],
      [
        "src" => "/img_pwa/ios/64.png",
        "sizes" => "64x64",
        "purpose" => "maskable"
      ],
      [
        "src" => "/img_pwa/ios/72.png",
        "sizes" => "72x72",
        "purpose" => "maskable"
      ],
      [
        "src" => "/img_pwa/ios/76.png",
        "sizes" => "76x76",
        "purpose" => "maskable"
      ],
      [
        "src" => "/img_pwa/ios/80.png",
        "sizes" => "80x80",
        "purpose" => "maskable"
      ],
      [
        "src" => "/img_pwa/ios/87.png",
        "sizes" => "87x87",
        "purpose" => "maskable"
      ],
      [
        "src" => "/img_pwa/ios/100.png",
        "sizes" => "100x100",
        "purpose" => "maskable"
      ],
      [
        "src" => "/img_pwa/ios/114.png",
        "sizes" => "114x114",
        "purpose" => "maskable"
      ],
      [
        "src" => "/img_pwa/ios/120.png",
        "sizes" => "120x120",
        "purpose" => "maskable"
      ],
      [
        "src" => "/img_pwa/ios/128.png",
        "sizes" => "128x128",
        "purpose" => "maskable"
      ],
      [
        "src" => "/img_pwa/ios/144.png",
        "sizes" => "144x144",
        "purpose" => "maskable"
      ],
      [
        "src" => "/img_pwa/ios/152.png",
        "sizes" => "152x152",
        "purpose" => "maskable"
      ],
      [
        "src" => "/img_pwa/ios/167.png",
        "sizes" => "167x167",
        "purpose" => "maskable"
      ],
      [
        "src" => "/img_pwa/ios/180.png",
        "sizes" => "180x180",
        "purpose" => "maskable"
      ],
      [
        "src" => "/img_pwa/ios/192.png",
        "sizes" => "192x192",
        "purpose" => "maskable"
      ],
      [
        "src" => "/img_pwa/ios/256.png",
        "sizes" => "256x256",
        "purpose" => "maskable"
      ],
      [
        "src" => "/img_pwa/ios/512.png",
        "sizes" => "512x512",
        "purpose" => "maskable"
      ],
      [
        "src" => "/img_pwa/ios/1024.png",
        "sizes" => "1024x1024",
        "purpose" => "maskable"
      ],
    ],

    "shortcuts" => [
      [
        'name' => 'Login | SMK ISLAM SEKARAN',
        'short_name' => 'Login | SMKISKRN',
        'theme_color' => '#333333',
        'background_color' => '#ffffff',
        'orientation' => 'portrait',
        'url' => '/login',
        'display' => 'fullscreen',
        'description' => 'Sebuah aplikasi web progresif untuk SMK Islam Sekaran yang memberikan pengalaman pengguna layaknya aplikasi native.',
        'icons' => [
          [
            "src" => "/img_pwa/windows11/SmallTile.scale-100.png",
            "sizes" => "71x71"
          ],
          [
            "src" => "/img_pwa/windows11/SmallTile.scale-125.png",
            "sizes" => "89x89"
          ],
          [
            "src" => "/img_pwa/windows11/SmallTile.scale-150.png",
            "sizes" => "107x107"
          ],
          [
            "src" => "/img_pwa/windows11/SmallTile.scale-200.png",
            "sizes" => "142x142"
          ],
          [
            "src" => "/img_pwa/windows11/SmallTile.scale-400.png",
            "sizes" => "284x284"
          ],
          [
            "src" => "/img_pwa/windows11/Square150x150Logo.scale-100.png",
            "sizes" => "150x150"
          ],
          [
            "src" => "/img_pwa/windows11/Square150x150Logo.scale-125.png",
            "sizes" => "188x188"
          ],
          [
            "src" => "/img_pwa/windows11/Square150x150Logo.scale-150.png",
            "sizes" => "225x225"
          ],
          [
            "src" => "/img_pwa/windows11/Square150x150Logo.scale-200.png",
            "sizes" => "300x300"
          ],
          [
            "src" => "/img_pwa/windows11/Square150x150Logo.scale-400.png",
            "sizes" => "600x600"
          ],
          [
            "src" => "/img_pwa/windows11/Wide310x150Logo.scale-100.png",
            "sizes" => "310x150"
          ],
          [
            "src" => "/img_pwa/windows11/Wide310x150Logo.scale-125.png",
            "sizes" => "388x188"
          ],
          [
            "src" => "/img_pwa/windows11/Wide310x150Logo.scale-150.png",
            "sizes" => "465x225"
          ],
          [
            "src" => "/img_pwa/windows11/Wide310x150Logo.scale-200.png",
            "sizes" => "620x300"
          ],
          [
            "src" => "/img_pwa/windows11/Wide310x150Logo.scale-400.png",
            "sizes" => "1240x600"
          ],
          [
            "src" => "/img_pwa/windows11/LargeTile.scale-100.png",
            "sizes" => "310x310"
          ],
          [
            "src" => "/img_pwa/windows11/LargeTile.scale-125.png",
            "sizes" => "388x388"
          ],
          [
            "src" => "/img_pwa/windows11/LargeTile.scale-150.png",
            "sizes" => "465x465"
          ],
          [
            "src" => "/img_pwa/windows11/LargeTile.scale-200.png",
            "sizes" => "620x620"
          ],
          [
            "src" => "/img_pwa/windows11/LargeTile.scale-400.png",
            "sizes" => "1240x1240"
          ],
          [
            "src" => "/img_pwa/windows11/Square44x44Logo.scale-100.png",
            "sizes" => "44x44"
          ],
          [
            "src" => "/img_pwa/windows11/Square44x44Logo.scale-125.png",
            "sizes" => "55x55"
          ],
          [
            "src" => "/img_pwa/windows11/Square44x44Logo.scale-150.png",
            "sizes" => "66x66"
          ],
          [
            "src" => "/img_pwa/windows11/Square44x44Logo.scale-200.png",
            "sizes" => "88x88"
          ],
          [
            "src" => "/img_pwa/windows11/Square44x44Logo.scale-400.png",
            "sizes" => "176x176"
          ],
          [
            "src" => "/img_pwa/windows11/StoreLogo.scale-100.png",
            "sizes" => "50x50"
          ],
          [
            "src" => "/img_pwa/windows11/StoreLogo.scale-125.png",
            "sizes" => "63x63"
          ],
          [
            "src" => "/img_pwa/windows11/StoreLogo.scale-150.png",
            "sizes" => "75x75"
          ],
          [
            "src" => "/img_pwa/windows11/StoreLogo.scale-200.png",
            "sizes" => "100x100"
          ],
          [
            "src" => "/img_pwa/windows11/StoreLogo.scale-400.png",
            "sizes" => "200x200"
          ],
          [
            "src" => "/img_pwa/windows11/SplashScreen.scale-100.png",
            "sizes" => "620x300"
          ],
          [
            "src" => "/img_pwa/windows11/SplashScreen.scale-125.png",
            "sizes" => "775x375"
          ],
          [
            "src" => "/img_pwa/windows11/SplashScreen.scale-150.png",
            "sizes" => "930x450"
          ],
          [
            "src" => "/img_pwa/windows11/SplashScreen.scale-200.png",
            "sizes" => "1240x600"
          ],
          [
            "src" => "/img_pwa/windows11/SplashScreen.scale-400.png",
            "sizes" => "2480x1200"
          ],
          [
            "src" => "/img_pwa/windows11/Square44x44Logo.targetsize-16.png",
            "sizes" => "16x16"
          ],
          [
            "src" => "/img_pwa/windows11/Square44x44Logo.targetsize-20.png",
            "sizes" => "20x20"
          ],
          [
            "src" => "/img_pwa/windows11/Square44x44Logo.targetsize-24.png",
            "sizes" => "24x24"
          ],
          [
            "src" => "/img_pwa/windows11/Square44x44Logo.targetsize-30.png",
            "sizes" => "30x30"
          ],
          [
            "src" => "/img_pwa/windows11/Square44x44Logo.targetsize-32.png",
            "sizes" => "32x32"
          ],
          [
            "src" => "/img_pwa/windows11/Square44x44Logo.targetsize-36.png",
            "sizes" => "36x36"
          ],
          [
            "src" => "/img_pwa/windows11/Square44x44Logo.targetsize-40.png",
            "sizes" => "40x40"
          ],
          [
            "src" => "/img_pwa/windows11/Square44x44Logo.targetsize-44.png",
            "sizes" => "44x44"
          ],
          [
            "src" => "/img_pwa/windows11/Square44x44Logo.targetsize-48.png",
            "sizes" => "48x48"
          ],
          [
            "src" => "/img_pwa/windows11/Square44x44Logo.targetsize-60.png",
            "sizes" => "60x60"
          ],
          [
            "src" => "/img_pwa/windows11/Square44x44Logo.targetsize-64.png",
            "sizes" => "64x64"
          ],
          [
            "src" => "/img_pwa/windows11/Square44x44Logo.targetsize-72.png",
            "sizes" => "72x72"
          ],
          [
            "src" => "/img_pwa/windows11/Square44x44Logo.targetsize-80.png",
            "sizes" => "80x80"
          ],
          [
            "src" => "/img_pwa/windows11/Square44x44Logo.targetsize-96.png",
            "sizes" => "96x96"
          ],
          [
            "src" => "/img_pwa/windows11/Square44x44Logo.targetsize-256.png",
            "sizes" => "256x256"
          ],
          [
            "src" => "/img_pwa/windows11/Square44x44Logo.altform-unplated_targetsize-16.png",
            "sizes" => "16x16"
          ],
          [
            "src" => "/img_pwa/windows11/Square44x44Logo.altform-unplated_targetsize-20.png",
            "sizes" => "20x20"
          ],
          [
            "src" => "/img_pwa/windows11/Square44x44Logo.altform-unplated_targetsize-24.png",
            "sizes" => "24x24"
          ],
          [
            "src" => "/img_pwa/windows11/Square44x44Logo.altform-unplated_targetsize-30.png",
            "sizes" => "30x30"
          ],
          [
            "src" => "/img_pwa/windows11/Square44x44Logo.altform-unplated_targetsize-32.png",
            "sizes" => "32x32"
          ],
          [
            "src" => "/img_pwa/windows11/Square44x44Logo.altform-unplated_targetsize-36.png",
            "sizes" => "36x36"
          ],
          [
            "src" => "/img_pwa/windows11/Square44x44Logo.altform-unplated_targetsize-40.png",
            "sizes" => "40x40"
          ],
          [
            "src" => "/img_pwa/windows11/Square44x44Logo.altform-unplated_targetsize-44.png",
            "sizes" => "44x44"
          ],
          [
            "src" => "/img_pwa/windows11/Square44x44Logo.altform-unplated_targetsize-48.png",
            "sizes" => "48x48"
          ],
          [
            "src" => "/img_pwa/windows11/Square44x44Logo.altform-unplated_targetsize-60.png",
            "sizes" => "60x60"
          ],
          [
            "src" => "/img_pwa/windows11/Square44x44Logo.altform-unplated_targetsize-64.png",
            "sizes" => "64x64"
          ],
          [
            "src" => "/img_pwa/windows11/Square44x44Logo.altform-unplated_targetsize-72.png",
            "sizes" => "72x72"
          ],
          [
            "src" => "/img_pwa/windows11/Square44x44Logo.altform-unplated_targetsize-80.png",
            "sizes" => "80x80"
          ],
          [
            "src" => "/img_pwa/windows11/Square44x44Logo.altform-unplated_targetsize-96.png",
            "sizes" => "96x96"
          ],
          [
            "src" => "/img_pwa/windows11/Square44x44Logo.altform-unplated_targetsize-256.png",
            "sizes" => "256x256"
          ],
          [
            "src" => "/img_pwa/windows11/Square44x44Logo.altform-lightunplated_targetsize-16.png",
            "sizes" => "16x16"
          ],
          [
            "src" => "/img_pwa/windows11/Square44x44Logo.altform-lightunplated_targetsize-20.png",
            "sizes" => "20x20"
          ],
          [
            "src" => "/img_pwa/windows11/Square44x44Logo.altform-lightunplated_targetsize-24.png",
            "sizes" => "24x24"
          ],
          [
            "src" => "/img_pwa/windows11/Square44x44Logo.altform-lightunplated_targetsize-30.png",
            "sizes" => "30x30"
          ],
          [
            "src" => "/img_pwa/windows11/Square44x44Logo.altform-lightunplated_targetsize-32.png",
            "sizes" => "32x32"
          ],
          [
            "src" => "/img_pwa/windows11/Square44x44Logo.altform-lightunplated_targetsize-36.png",
            "sizes" => "36x36"
          ],
          [
            "src" => "/img_pwa/windows11/Square44x44Logo.altform-lightunplated_targetsize-40.png",
            "sizes" => "40x40"
          ],
          [
            "src" => "/img_pwa/windows11/Square44x44Logo.altform-lightunplated_targetsize-44.png",
            "sizes" => "44x44"
          ],
          [
            "src" => "/img_pwa/windows11/Square44x44Logo.altform-lightunplated_targetsize-48.png",
            "sizes" => "48x48"
          ],
          [
            "src" => "/img_pwa/windows11/Square44x44Logo.altform-lightunplated_targetsize-60.png",
            "sizes" => "60x60"
          ],
          [
            "src" => "/img_pwa/windows11/Square44x44Logo.altform-lightunplated_targetsize-64.png",
            "sizes" => "64x64"
          ],
          [
            "src" => "/img_pwa/windows11/Square44x44Logo.altform-lightunplated_targetsize-72.png",
            "sizes" => "72x72"
          ],
          [
            "src" => "/img_pwa/windows11/Square44x44Logo.altform-lightunplated_targetsize-80.png",
            "sizes" => "80x80"
          ],
          [
            "src" => "/img_pwa/windows11/Square44x44Logo.altform-lightunplated_targetsize-96.png",
            "sizes" => "96x96"
          ],
          [
            "src" => "/img_pwa/windows11/Square44x44Logo.altform-lightunplated_targetsize-256.png",
            "sizes" => "256x256"
          ],
          [
            "src" => "/img_pwa/android/android-launchericon-512-512.png",
            "sizes" => "512x512"
          ],
          [
            "src" => "/img_pwa/android/android-launchericon-192-192.png",
            "sizes" => "192x192"
          ],
          [
            "src" => "/img_pwa/android/android-launchericon-144-144.png",
            "sizes" => "144x144"
          ],
          [
            "src" => "/img_pwa/android/android-launchericon-96-96.png",
            "sizes" => "96x96"
          ],
          [
            "src" => "/img_pwa/android/android-launchericon-72-72.png",
            "sizes" => "72x72"
          ],
          [
            "src" => "/img_pwa/android/android-launchericon-48-48.png",
            "sizes" => "48x48"
          ],
          [
            "src" => "/img_pwa/ios/16.png",
            "sizes" => "16x16"
          ],
          [
            "src" => "/img_pwa/ios/20.png",
            "sizes" => "20x20"
          ],
          [
            "src" => "/img_pwa/ios/29.png",
            "sizes" => "29x29"
          ],
          [
            "src" => "/img_pwa/ios/32.png",
            "sizes" => "32x32"
          ],
          [
            "src" => "/img_pwa/ios/40.png",
            "sizes" => "40x40"
          ],
          [
            "src" => "/img_pwa/ios/50.png",
            "sizes" => "50x50"
          ],
          [
            "src" => "/img_pwa/ios/57.png",
            "sizes" => "57x57"
          ],
          [
            "src" => "/img_pwa/ios/58.png",
            "sizes" => "58x58"
          ],
          [
            "src" => "/img_pwa/ios/60.png",
            "sizes" => "60x60"
          ],
          [
            "src" => "/img_pwa/ios/64.png",
            "sizes" => "64x64"
          ],
          [
            "src" => "/img_pwa/ios/72.png",
            "sizes" => "72x72"
          ],
          [
            "src" => "/img_pwa/ios/76.png",
            "sizes" => "76x76"
          ],
          [
            "src" => "/img_pwa/ios/80.png",
            "sizes" => "80x80"
          ],
          [
            "src" => "/img_pwa/ios/87.png",
            "sizes" => "87x87"
          ],
          [
            "src" => "/img_pwa/ios/100.png",
            "sizes" => "100x100"
          ],
          [
            "src" => "/img_pwa/ios/114.png",
            "sizes" => "114x114"
          ],
          [
            "src" => "/img_pwa/ios/120.png",
            "sizes" => "120x120"
          ],
          [
            "src" => "/img_pwa/ios/128.png",
            "sizes" => "128x128"
          ],
          [
            "src" => "/img_pwa/ios/144.png",
            "sizes" => "144x144"
          ],
          [
            "src" => "/img_pwa/ios/152.png",
            "sizes" => "152x152"
          ],
          [
            "src" => "/img_pwa/ios/167.png",
            "sizes" => "167x167"
          ],
          [
            "src" => "/img_pwa/ios/180.png",
            "sizes" => "180x180"
          ],
          [
            "src" => "/img_pwa/ios/192.png",
            "sizes" => "192x192"
          ],
          [
            "src" => "/img_pwa/ios/256.png",
            "sizes" => "256x256"
          ],
          [
            "src" => "/img_pwa/ios/512.png",
            "sizes" => "512x512"
          ],
          [
            "src" => "/img_pwa/ios/1024.png",
            "sizes" => "1024x1024"
          ],
          [
            "src" => "/img_pwa/windows11/SmallTile.scale-100.png",
            "sizes" => "71x71",
            "purpose" => "maskable"
          ],
          [
            "src" => "/img_pwa/windows11/SmallTile.scale-125.png",
            "sizes" => "89x89",
            "purpose" => "maskable"
          ],
          [
            "src" => "/img_pwa/windows11/SmallTile.scale-150.png",
            "sizes" => "107x107",
            "purpose" => "maskable"
          ],
          [
            "src" => "/img_pwa/windows11/SmallTile.scale-200.png",
            "sizes" => "142x142",
            "purpose" => "maskable"
          ],
          [
            "src" => "/img_pwa/windows11/SmallTile.scale-400.png",
            "sizes" => "284x284",
            "purpose" => "maskable"
          ],
          [
            "src" => "/img_pwa/windows11/Square150x150Logo.scale-100.png",
            "sizes" => "150x150",
            "purpose" => "maskable"
          ],
          [
            "src" => "/img_pwa/windows11/Square150x150Logo.scale-125.png",
            "sizes" => "188x188",
            "purpose" => "maskable"
          ],
          [
            "src" => "/img_pwa/windows11/Square150x150Logo.scale-150.png",
            "sizes" => "225x225",
            "purpose" => "maskable"
          ],
          [
            "src" => "/img_pwa/windows11/Square150x150Logo.scale-200.png",
            "sizes" => "300x300",
            "purpose" => "maskable"
          ],
          [
            "src" => "/img_pwa/windows11/Square150x150Logo.scale-400.png",
            "sizes" => "600x600",
            "purpose" => "maskable"
          ],
          [
            "src" => "/img_pwa/windows11/Wide310x150Logo.scale-100.png",
            "sizes" => "310x150",
            "purpose" => "maskable"
          ],
          [
            "src" => "/img_pwa/windows11/Wide310x150Logo.scale-125.png",
            "sizes" => "388x188",
            "purpose" => "maskable"
          ],
          [
            "src" => "/img_pwa/windows11/Wide310x150Logo.scale-150.png",
            "sizes" => "465x225",
            "purpose" => "maskable"
          ],
          [
            "src" => "/img_pwa/windows11/Wide310x150Logo.scale-200.png",
            "sizes" => "620x300",
            "purpose" => "maskable"
          ],
          [
            "src" => "/img_pwa/windows11/Wide310x150Logo.scale-400.png",
            "sizes" => "1240x600",
            "purpose" => "maskable"
          ],
          [
            "src" => "/img_pwa/windows11/LargeTile.scale-100.png",
            "sizes" => "310x310",
            "purpose" => "maskable"
          ],
          [
            "src" => "/img_pwa/windows11/LargeTile.scale-125.png",
            "sizes" => "388x388",
            "purpose" => "maskable"
          ],
          [
            "src" => "/img_pwa/windows11/LargeTile.scale-150.png",
            "sizes" => "465x465",
            "purpose" => "maskable"
          ],
          [
            "src" => "/img_pwa/windows11/LargeTile.scale-200.png",
            "sizes" => "620x620",
            "purpose" => "maskable"
          ],
          [
            "src" => "/img_pwa/windows11/LargeTile.scale-400.png",
            "sizes" => "1240x1240",
            "purpose" => "maskable"
          ],
          [
            "src" => "/img_pwa/windows11/Square44x44Logo.scale-100.png",
            "sizes" => "44x44",
            "purpose" => "maskable"
          ],
          [
            "src" => "/img_pwa/windows11/Square44x44Logo.scale-125.png",
            "sizes" => "55x55",
            "purpose" => "maskable"
          ],
          [
            "src" => "/img_pwa/windows11/Square44x44Logo.scale-150.png",
            "sizes" => "66x66",
            "purpose" => "maskable"
          ],
          [
            "src" => "/img_pwa/windows11/Square44x44Logo.scale-200.png",
            "sizes" => "88x88",
            "purpose" => "maskable"
          ],
          [
            "src" => "/img_pwa/windows11/Square44x44Logo.scale-400.png",
            "sizes" => "176x176",
            "purpose" => "maskable"
          ],
          [
            "src" => "/img_pwa/windows11/StoreLogo.scale-100.png",
            "sizes" => "50x50",
            "purpose" => "maskable"
          ],
          [
            "src" => "/img_pwa/windows11/StoreLogo.scale-125.png",
            "sizes" => "63x63",
            "purpose" => "maskable"
          ],
          [
            "src" => "/img_pwa/windows11/StoreLogo.scale-150.png",
            "sizes" => "75x75",
            "purpose" => "maskable"
          ],
          [
            "src" => "/img_pwa/windows11/StoreLogo.scale-200.png",
            "sizes" => "100x100",
            "purpose" => "maskable"
          ],
          [
            "src" => "/img_pwa/windows11/StoreLogo.scale-400.png",
            "sizes" => "200x200",
            "purpose" => "maskable"
          ],
          [
            "src" => "/img_pwa/windows11/SplashScreen.scale-100.png",
            "sizes" => "620x300",
            "purpose" => "maskable"
          ],
          [
            "src" => "/img_pwa/windows11/SplashScreen.scale-125.png",
            "sizes" => "775x375",
            "purpose" => "maskable"
          ],
          [
            "src" => "/img_pwa/windows11/SplashScreen.scale-150.png",
            "sizes" => "930x450",
            "purpose" => "maskable"
          ],
          [
            "src" => "/img_pwa/windows11/SplashScreen.scale-200.png",
            "sizes" => "1240x600",
            "purpose" => "maskable"
          ],
          [
            "src" => "/img_pwa/windows11/SplashScreen.scale-400.png",
            "sizes" => "2480x1200",
            "purpose" => "maskable"
          ],
          [
            "src" => "/img_pwa/windows11/Square44x44Logo.targetsize-16.png",
            "sizes" => "16x16",
            "purpose" => "maskable"
          ],
          [
            "src" => "/img_pwa/windows11/Square44x44Logo.targetsize-20.png",
            "sizes" => "20x20",
            "purpose" => "maskable"
          ],
          [
            "src" => "/img_pwa/windows11/Square44x44Logo.targetsize-24.png",
            "sizes" => "24x24",
            "purpose" => "maskable"
          ],
          [
            "src" => "/img_pwa/windows11/Square44x44Logo.targetsize-30.png",
            "sizes" => "30x30",
            "purpose" => "maskable"
          ],
          [
            "src" => "/img_pwa/windows11/Square44x44Logo.targetsize-32.png",
            "sizes" => "32x32",
            "purpose" => "maskable"
          ],
          [
            "src" => "/img_pwa/windows11/Square44x44Logo.targetsize-36.png",
            "sizes" => "36x36",
            "purpose" => "maskable"
          ],
          [
            "src" => "/img_pwa/windows11/Square44x44Logo.targetsize-40.png",
            "sizes" => "40x40",
            "purpose" => "maskable"
          ],
          [
            "src" => "/img_pwa/windows11/Square44x44Logo.targetsize-44.png",
            "sizes" => "44x44",
            "purpose" => "maskable"
          ],
          [
            "src" => "/img_pwa/windows11/Square44x44Logo.targetsize-48.png",
            "sizes" => "48x48",
            "purpose" => "maskable"
          ],
          [
            "src" => "/img_pwa/windows11/Square44x44Logo.targetsize-60.png",
            "sizes" => "60x60",
            "purpose" => "maskable"
          ],
          [
            "src" => "/img_pwa/windows11/Square44x44Logo.targetsize-64.png",
            "sizes" => "64x64",
            "purpose" => "maskable"
          ],
          [
            "src" => "/img_pwa/windows11/Square44x44Logo.targetsize-72.png",
            "sizes" => "72x72",
            "purpose" => "maskable"
          ],
          [
            "src" => "/img_pwa/windows11/Square44x44Logo.targetsize-80.png",
            "sizes" => "80x80",
            "purpose" => "maskable"
          ],
          [
            "src" => "/img_pwa/windows11/Square44x44Logo.targetsize-96.png",
            "sizes" => "96x96",
            "purpose" => "maskable"
          ],
          [
            "src" => "/img_pwa/windows11/Square44x44Logo.targetsize-256.png",
            "sizes" => "256x256",
            "purpose" => "maskable"
          ],
          [
            "src" => "/img_pwa/windows11/Square44x44Logo.altform-unplated_targetsize-16.png",
            "sizes" => "16x16",
            "purpose" => "maskable"
          ],
          [
            "src" => "/img_pwa/windows11/Square44x44Logo.altform-unplated_targetsize-20.png",
            "sizes" => "20x20",
            "purpose" => "maskable"
          ],
          [
            "src" => "/img_pwa/windows11/Square44x44Logo.altform-unplated_targetsize-24.png",
            "sizes" => "24x24",
            "purpose" => "maskable"
          ],
          [
            "src" => "/img_pwa/windows11/Square44x44Logo.altform-unplated_targetsize-30.png",
            "sizes" => "30x30",
            "purpose" => "maskable"
          ],
          [
            "src" => "/img_pwa/windows11/Square44x44Logo.altform-unplated_targetsize-32.png",
            "sizes" => "32x32",
            "purpose" => "maskable"
          ],
          [
            "src" => "/img_pwa/windows11/Square44x44Logo.altform-unplated_targetsize-36.png",
            "sizes" => "36x36",
            "purpose" => "maskable"
          ],
          [
            "src" => "/img_pwa/windows11/Square44x44Logo.altform-unplated_targetsize-40.png",
            "sizes" => "40x40",
            "purpose" => "maskable"
          ],
          [
            "src" => "/img_pwa/windows11/Square44x44Logo.altform-unplated_targetsize-44.png",
            "sizes" => "44x44",
            "purpose" => "maskable"
          ],
          [
            "src" => "/img_pwa/windows11/Square44x44Logo.altform-unplated_targetsize-48.png",
            "sizes" => "48x48",
            "purpose" => "maskable"
          ],
          [
            "src" => "/img_pwa/windows11/Square44x44Logo.altform-unplated_targetsize-60.png",
            "sizes" => "60x60",
            "purpose" => "maskable"
          ],
          [
            "src" => "/img_pwa/windows11/Square44x44Logo.altform-unplated_targetsize-64.png",
            "sizes" => "64x64",
            "purpose" => "maskable"
          ],
          [
            "src" => "/img_pwa/windows11/Square44x44Logo.altform-unplated_targetsize-72.png",
            "sizes" => "72x72",
            "purpose" => "maskable"
          ],
          [
            "src" => "/img_pwa/windows11/Square44x44Logo.altform-unplated_targetsize-80.png",
            "sizes" => "80x80",
            "purpose" => "maskable"
          ],
          [
            "src" => "/img_pwa/windows11/Square44x44Logo.altform-unplated_targetsize-96.png",
            "sizes" => "96x96",
            "purpose" => "maskable"
          ],
          [
            "src" => "/img_pwa/windows11/Square44x44Logo.altform-unplated_targetsize-256.png",
            "sizes" => "256x256",
            "purpose" => "maskable"
          ],
          [
            "src" => "/img_pwa/windows11/Square44x44Logo.altform-lightunplated_targetsize-16.png",
            "sizes" => "16x16",
            "purpose" => "maskable"
          ],
          [
            "src" => "/img_pwa/windows11/Square44x44Logo.altform-lightunplated_targetsize-20.png",
            "sizes" => "20x20",
            "purpose" => "maskable"
          ],
          [
            "src" => "/img_pwa/windows11/Square44x44Logo.altform-lightunplated_targetsize-24.png",
            "sizes" => "24x24",
            "purpose" => "maskable"
          ],
          [
            "src" => "/img_pwa/windows11/Square44x44Logo.altform-lightunplated_targetsize-30.png",
            "sizes" => "30x30",
            "purpose" => "maskable"
          ],
          [
            "src" => "/img_pwa/windows11/Square44x44Logo.altform-lightunplated_targetsize-32.png",
            "sizes" => "32x32",
            "purpose" => "maskable"
          ],
          [
            "src" => "/img_pwa/windows11/Square44x44Logo.altform-lightunplated_targetsize-36.png",
            "sizes" => "36x36",
            "purpose" => "maskable"
          ],
          [
            "src" => "/img_pwa/windows11/Square44x44Logo.altform-lightunplated_targetsize-40.png",
            "sizes" => "40x40",
            "purpose" => "maskable"
          ],
          [
            "src" => "/img_pwa/windows11/Square44x44Logo.altform-lightunplated_targetsize-44.png",
            "sizes" => "44x44",
            "purpose" => "maskable"
          ],
          [
            "src" => "/img_pwa/windows11/Square44x44Logo.altform-lightunplated_targetsize-48.png",
            "sizes" => "48x48",
            "purpose" => "maskable"
          ],
          [
            "src" => "/img_pwa/windows11/Square44x44Logo.altform-lightunplated_targetsize-60.png",
            "sizes" => "60x60",
            "purpose" => "maskable"
          ],
          [
            "src" => "/img_pwa/windows11/Square44x44Logo.altform-lightunplated_targetsize-64.png",
            "sizes" => "64x64",
            "purpose" => "maskable"
          ],
          [
            "src" => "/img_pwa/windows11/Square44x44Logo.altform-lightunplated_targetsize-72.png",
            "sizes" => "72x72",
            "purpose" => "maskable"
          ],
          [
            "src" => "/img_pwa/windows11/Square44x44Logo.altform-lightunplated_targetsize-80.png",
            "sizes" => "80x80",
            "purpose" => "maskable"
          ],
          [
            "src" => "/img_pwa/windows11/Square44x44Logo.altform-lightunplated_targetsize-96.png",
            "sizes" => "96x96",
            "purpose" => "maskable"
          ],
          [
            "src" => "/img_pwa/windows11/Square44x44Logo.altform-lightunplated_targetsize-256.png",
            "sizes" => "256x256",
            "purpose" => "maskable"
          ],
          [
            "src" => "/img_pwa/android/android-launchericon-512-512.png",
            "sizes" => "512x512",
            "purpose" => "maskable"
          ],
          [
            "src" => "/img_pwa/android/android-launchericon-192-192.png",
            "sizes" => "192x192",
            "purpose" => "maskable"
          ],
          [
            "src" => "/img_pwa/android/android-launchericon-144-144.png",
            "sizes" => "144x144",
            "purpose" => "maskable"
          ],
          [
            "src" => "/img_pwa/android/android-launchericon-96-96.png",
            "sizes" => "96x96",
            "purpose" => "maskable"
          ],
          [
            "src" => "/img_pwa/android/android-launchericon-72-72.png",
            "sizes" => "72x72",
            "purpose" => "maskable"
          ],
          [
            "src" => "/img_pwa/android/android-launchericon-48-48.png",
            "sizes" => "48x48",
            "purpose" => "maskable"
          ],
          [
            "src" => "/img_pwa/ios/16.png",
            "sizes" => "16x16",
            "purpose" => "maskable"
          ],
          [
            "src" => "/img_pwa/ios/20.png",
            "sizes" => "20x20",
            "purpose" => "maskable"
          ],
          [
            "src" => "/img_pwa/ios/29.png",
            "sizes" => "29x29",
            "purpose" => "maskable"
          ],
          [
            "src" => "/img_pwa/ios/32.png",
            "sizes" => "32x32",
            "purpose" => "maskable"
          ],
          [
            "src" => "/img_pwa/ios/40.png",
            "sizes" => "40x40",
            "purpose" => "maskable"
          ],
          [
            "src" => "/img_pwa/ios/50.png",
            "sizes" => "50x50",
            "purpose" => "maskable"
          ],
          [
            "src" => "/img_pwa/ios/57.png",
            "sizes" => "57x57",
            "purpose" => "maskable"
          ],
          [
            "src" => "/img_pwa/ios/58.png",
            "sizes" => "58x58",
            "purpose" => "maskable"
          ],
          [
            "src" => "/img_pwa/ios/60.png",
            "sizes" => "60x60",
            "purpose" => "maskable"
          ],
          [
            "src" => "/img_pwa/ios/64.png",
            "sizes" => "64x64",
            "purpose" => "maskable"
          ],
          [
            "src" => "/img_pwa/ios/72.png",
            "sizes" => "72x72",
            "purpose" => "maskable"
          ],
          [
            "src" => "/img_pwa/ios/76.png",
            "sizes" => "76x76",
            "purpose" => "maskable"
          ],
          [
            "src" => "/img_pwa/ios/80.png",
            "sizes" => "80x80",
            "purpose" => "maskable"
          ],
          [
            "src" => "/img_pwa/ios/87.png",
            "sizes" => "87x87",
            "purpose" => "maskable"
          ],
          [
            "src" => "/img_pwa/ios/100.png",
            "sizes" => "100x100",
            "purpose" => "maskable"
          ],
          [
            "src" => "/img_pwa/ios/114.png",
            "sizes" => "114x114",
            "purpose" => "maskable"
          ],
          [
            "src" => "/img_pwa/ios/120.png",
            "sizes" => "120x120",
            "purpose" => "maskable"
          ],
          [
            "src" => "/img_pwa/ios/128.png",
            "sizes" => "128x128",
            "purpose" => "maskable"
          ],
          [
            "src" => "/img_pwa/ios/144.png",
            "sizes" => "144x144",
            "purpose" => "maskable"
          ],
          [
            "src" => "/img_pwa/ios/152.png",
            "sizes" => "152x152",
            "purpose" => "maskable"
          ],
          [
            "src" => "/img_pwa/ios/167.png",
            "sizes" => "167x167",
            "purpose" => "maskable"
          ],
          [
            "src" => "/img_pwa/ios/180.png",
            "sizes" => "180x180",
            "purpose" => "maskable"
          ],
          [
            "src" => "/img_pwa/ios/192.png",
            "sizes" => "192x192",
            "purpose" => "maskable"
          ],
          [
            "src" => "/img_pwa/ios/256.png",
            "sizes" => "256x256",
            "purpose" => "maskable"
          ],
          [
            "src" => "/img_pwa/ios/512.png",
            "sizes" => "512x512",
            "purpose" => "maskable"
          ],
          [
            "src" => "/img_pwa/ios/1024.png",
            "sizes" => "1024x1024",
            "purpose" => "maskable"
          ],
        ],
      ],
      [
        'name' => 'Dashboard | SMK ISLAM SEKARAN',
        'short_name' => 'Dashboard | SMKISKRN',
        'theme_color' => '#333333',
        'background_color' => '#ffffff',
        'orientation' => 'portrait',
        'url' => '/admin',
        'display' => 'fullscreen',
        'description' => 'Sebuah aplikasi web progresif untuk SMK Islam Sekaran yang memberikan pengalaman pengguna layaknya aplikasi native.',
        'icons' => [
          [
            "src" => "/img_pwa/windows11/SmallTile.scale-100.png",
            "sizes" => "71x71"
          ],
          [
            "src" => "/img_pwa/windows11/SmallTile.scale-125.png",
            "sizes" => "89x89"
          ],
          [
            "src" => "/img_pwa/windows11/SmallTile.scale-150.png",
            "sizes" => "107x107"
          ],
          [
            "src" => "/img_pwa/windows11/SmallTile.scale-200.png",
            "sizes" => "142x142"
          ],
          [
            "src" => "/img_pwa/windows11/SmallTile.scale-400.png",
            "sizes" => "284x284"
          ],
          [
            "src" => "/img_pwa/windows11/Square150x150Logo.scale-100.png",
            "sizes" => "150x150"
          ],
          [
            "src" => "/img_pwa/windows11/Square150x150Logo.scale-125.png",
            "sizes" => "188x188"
          ],
          [
            "src" => "/img_pwa/windows11/Square150x150Logo.scale-150.png",
            "sizes" => "225x225"
          ],
          [
            "src" => "/img_pwa/windows11/Square150x150Logo.scale-200.png",
            "sizes" => "300x300"
          ],
          [
            "src" => "/img_pwa/windows11/Square150x150Logo.scale-400.png",
            "sizes" => "600x600"
          ],
          [
            "src" => "/img_pwa/windows11/Wide310x150Logo.scale-100.png",
            "sizes" => "310x150"
          ],
          [
            "src" => "/img_pwa/windows11/Wide310x150Logo.scale-125.png",
            "sizes" => "388x188"
          ],
          [
            "src" => "/img_pwa/windows11/Wide310x150Logo.scale-150.png",
            "sizes" => "465x225"
          ],
          [
            "src" => "/img_pwa/windows11/Wide310x150Logo.scale-200.png",
            "sizes" => "620x300"
          ],
          [
            "src" => "/img_pwa/windows11/Wide310x150Logo.scale-400.png",
            "sizes" => "1240x600"
          ],
          [
            "src" => "/img_pwa/windows11/LargeTile.scale-100.png",
            "sizes" => "310x310"
          ],
          [
            "src" => "/img_pwa/windows11/LargeTile.scale-125.png",
            "sizes" => "388x388"
          ],
          [
            "src" => "/img_pwa/windows11/LargeTile.scale-150.png",
            "sizes" => "465x465"
          ],
          [
            "src" => "/img_pwa/windows11/LargeTile.scale-200.png",
            "sizes" => "620x620"
          ],
          [
            "src" => "/img_pwa/windows11/LargeTile.scale-400.png",
            "sizes" => "1240x1240"
          ],
          [
            "src" => "/img_pwa/windows11/Square44x44Logo.scale-100.png",
            "sizes" => "44x44"
          ],
          [
            "src" => "/img_pwa/windows11/Square44x44Logo.scale-125.png",
            "sizes" => "55x55"
          ],
          [
            "src" => "/img_pwa/windows11/Square44x44Logo.scale-150.png",
            "sizes" => "66x66"
          ],
          [
            "src" => "/img_pwa/windows11/Square44x44Logo.scale-200.png",
            "sizes" => "88x88"
          ],
          [
            "src" => "/img_pwa/windows11/Square44x44Logo.scale-400.png",
            "sizes" => "176x176"
          ],
          [
            "src" => "/img_pwa/windows11/StoreLogo.scale-100.png",
            "sizes" => "50x50"
          ],
          [
            "src" => "/img_pwa/windows11/StoreLogo.scale-125.png",
            "sizes" => "63x63"
          ],
          [
            "src" => "/img_pwa/windows11/StoreLogo.scale-150.png",
            "sizes" => "75x75"
          ],
          [
            "src" => "/img_pwa/windows11/StoreLogo.scale-200.png",
            "sizes" => "100x100"
          ],
          [
            "src" => "/img_pwa/windows11/StoreLogo.scale-400.png",
            "sizes" => "200x200"
          ],
          [
            "src" => "/img_pwa/windows11/SplashScreen.scale-100.png",
            "sizes" => "620x300"
          ],
          [
            "src" => "/img_pwa/windows11/SplashScreen.scale-125.png",
            "sizes" => "775x375"
          ],
          [
            "src" => "/img_pwa/windows11/SplashScreen.scale-150.png",
            "sizes" => "930x450"
          ],
          [
            "src" => "/img_pwa/windows11/SplashScreen.scale-200.png",
            "sizes" => "1240x600"
          ],
          [
            "src" => "/img_pwa/windows11/SplashScreen.scale-400.png",
            "sizes" => "2480x1200"
          ],
          [
            "src" => "/img_pwa/windows11/Square44x44Logo.targetsize-16.png",
            "sizes" => "16x16"
          ],
          [
            "src" => "/img_pwa/windows11/Square44x44Logo.targetsize-20.png",
            "sizes" => "20x20"
          ],
          [
            "src" => "/img_pwa/windows11/Square44x44Logo.targetsize-24.png",
            "sizes" => "24x24"
          ],
          [
            "src" => "/img_pwa/windows11/Square44x44Logo.targetsize-30.png",
            "sizes" => "30x30"
          ],
          [
            "src" => "/img_pwa/windows11/Square44x44Logo.targetsize-32.png",
            "sizes" => "32x32"
          ],
          [
            "src" => "/img_pwa/windows11/Square44x44Logo.targetsize-36.png",
            "sizes" => "36x36"
          ],
          [
            "src" => "/img_pwa/windows11/Square44x44Logo.targetsize-40.png",
            "sizes" => "40x40"
          ],
          [
            "src" => "/img_pwa/windows11/Square44x44Logo.targetsize-44.png",
            "sizes" => "44x44"
          ],
          [
            "src" => "/img_pwa/windows11/Square44x44Logo.targetsize-48.png",
            "sizes" => "48x48"
          ],
          [
            "src" => "/img_pwa/windows11/Square44x44Logo.targetsize-60.png",
            "sizes" => "60x60"
          ],
          [
            "src" => "/img_pwa/windows11/Square44x44Logo.targetsize-64.png",
            "sizes" => "64x64"
          ],
          [
            "src" => "/img_pwa/windows11/Square44x44Logo.targetsize-72.png",
            "sizes" => "72x72"
          ],
          [
            "src" => "/img_pwa/windows11/Square44x44Logo.targetsize-80.png",
            "sizes" => "80x80"
          ],
          [
            "src" => "/img_pwa/windows11/Square44x44Logo.targetsize-96.png",
            "sizes" => "96x96"
          ],
          [
            "src" => "/img_pwa/windows11/Square44x44Logo.targetsize-256.png",
            "sizes" => "256x256"
          ],
          [
            "src" => "/img_pwa/windows11/Square44x44Logo.altform-unplated_targetsize-16.png",
            "sizes" => "16x16"
          ],
          [
            "src" => "/img_pwa/windows11/Square44x44Logo.altform-unplated_targetsize-20.png",
            "sizes" => "20x20"
          ],
          [
            "src" => "/img_pwa/windows11/Square44x44Logo.altform-unplated_targetsize-24.png",
            "sizes" => "24x24"
          ],
          [
            "src" => "/img_pwa/windows11/Square44x44Logo.altform-unplated_targetsize-30.png",
            "sizes" => "30x30"
          ],
          [
            "src" => "/img_pwa/windows11/Square44x44Logo.altform-unplated_targetsize-32.png",
            "sizes" => "32x32"
          ],
          [
            "src" => "/img_pwa/windows11/Square44x44Logo.altform-unplated_targetsize-36.png",
            "sizes" => "36x36"
          ],
          [
            "src" => "/img_pwa/windows11/Square44x44Logo.altform-unplated_targetsize-40.png",
            "sizes" => "40x40"
          ],
          [
            "src" => "/img_pwa/windows11/Square44x44Logo.altform-unplated_targetsize-44.png",
            "sizes" => "44x44"
          ],
          [
            "src" => "/img_pwa/windows11/Square44x44Logo.altform-unplated_targetsize-48.png",
            "sizes" => "48x48"
          ],
          [
            "src" => "/img_pwa/windows11/Square44x44Logo.altform-unplated_targetsize-60.png",
            "sizes" => "60x60"
          ],
          [
            "src" => "/img_pwa/windows11/Square44x44Logo.altform-unplated_targetsize-64.png",
            "sizes" => "64x64"
          ],
          [
            "src" => "/img_pwa/windows11/Square44x44Logo.altform-unplated_targetsize-72.png",
            "sizes" => "72x72"
          ],
          [
            "src" => "/img_pwa/windows11/Square44x44Logo.altform-unplated_targetsize-80.png",
            "sizes" => "80x80"
          ],
          [
            "src" => "/img_pwa/windows11/Square44x44Logo.altform-unplated_targetsize-96.png",
            "sizes" => "96x96"
          ],
          [
            "src" => "/img_pwa/windows11/Square44x44Logo.altform-unplated_targetsize-256.png",
            "sizes" => "256x256"
          ],
          [
            "src" => "/img_pwa/windows11/Square44x44Logo.altform-lightunplated_targetsize-16.png",
            "sizes" => "16x16"
          ],
          [
            "src" => "/img_pwa/windows11/Square44x44Logo.altform-lightunplated_targetsize-20.png",
            "sizes" => "20x20"
          ],
          [
            "src" => "/img_pwa/windows11/Square44x44Logo.altform-lightunplated_targetsize-24.png",
            "sizes" => "24x24"
          ],
          [
            "src" => "/img_pwa/windows11/Square44x44Logo.altform-lightunplated_targetsize-30.png",
            "sizes" => "30x30"
          ],
          [
            "src" => "/img_pwa/windows11/Square44x44Logo.altform-lightunplated_targetsize-32.png",
            "sizes" => "32x32"
          ],
          [
            "src" => "/img_pwa/windows11/Square44x44Logo.altform-lightunplated_targetsize-36.png",
            "sizes" => "36x36"
          ],
          [
            "src" => "/img_pwa/windows11/Square44x44Logo.altform-lightunplated_targetsize-40.png",
            "sizes" => "40x40"
          ],
          [
            "src" => "/img_pwa/windows11/Square44x44Logo.altform-lightunplated_targetsize-44.png",
            "sizes" => "44x44"
          ],
          [
            "src" => "/img_pwa/windows11/Square44x44Logo.altform-lightunplated_targetsize-48.png",
            "sizes" => "48x48"
          ],
          [
            "src" => "/img_pwa/windows11/Square44x44Logo.altform-lightunplated_targetsize-60.png",
            "sizes" => "60x60"
          ],
          [
            "src" => "/img_pwa/windows11/Square44x44Logo.altform-lightunplated_targetsize-64.png",
            "sizes" => "64x64"
          ],
          [
            "src" => "/img_pwa/windows11/Square44x44Logo.altform-lightunplated_targetsize-72.png",
            "sizes" => "72x72"
          ],
          [
            "src" => "/img_pwa/windows11/Square44x44Logo.altform-lightunplated_targetsize-80.png",
            "sizes" => "80x80"
          ],
          [
            "src" => "/img_pwa/windows11/Square44x44Logo.altform-lightunplated_targetsize-96.png",
            "sizes" => "96x96"
          ],
          [
            "src" => "/img_pwa/windows11/Square44x44Logo.altform-lightunplated_targetsize-256.png",
            "sizes" => "256x256"
          ],
          [
            "src" => "/img_pwa/android/android-launchericon-512-512.png",
            "sizes" => "512x512"
          ],
          [
            "src" => "/img_pwa/android/android-launchericon-192-192.png",
            "sizes" => "192x192"
          ],
          [
            "src" => "/img_pwa/android/android-launchericon-144-144.png",
            "sizes" => "144x144"
          ],
          [
            "src" => "/img_pwa/android/android-launchericon-96-96.png",
            "sizes" => "96x96"
          ],
          [
            "src" => "/img_pwa/android/android-launchericon-72-72.png",
            "sizes" => "72x72"
          ],
          [
            "src" => "/img_pwa/android/android-launchericon-48-48.png",
            "sizes" => "48x48"
          ],
          [
            "src" => "/img_pwa/ios/16.png",
            "sizes" => "16x16"
          ],
          [
            "src" => "/img_pwa/ios/20.png",
            "sizes" => "20x20"
          ],
          [
            "src" => "/img_pwa/ios/29.png",
            "sizes" => "29x29"
          ],
          [
            "src" => "/img_pwa/ios/32.png",
            "sizes" => "32x32"
          ],
          [
            "src" => "/img_pwa/ios/40.png",
            "sizes" => "40x40"
          ],
          [
            "src" => "/img_pwa/ios/50.png",
            "sizes" => "50x50"
          ],
          [
            "src" => "/img_pwa/ios/57.png",
            "sizes" => "57x57"
          ],
          [
            "src" => "/img_pwa/ios/58.png",
            "sizes" => "58x58"
          ],
          [
            "src" => "/img_pwa/ios/60.png",
            "sizes" => "60x60"
          ],
          [
            "src" => "/img_pwa/ios/64.png",
            "sizes" => "64x64"
          ],
          [
            "src" => "/img_pwa/ios/72.png",
            "sizes" => "72x72"
          ],
          [
            "src" => "/img_pwa/ios/76.png",
            "sizes" => "76x76"
          ],
          [
            "src" => "/img_pwa/ios/80.png",
            "sizes" => "80x80"
          ],
          [
            "src" => "/img_pwa/ios/87.png",
            "sizes" => "87x87"
          ],
          [
            "src" => "/img_pwa/ios/100.png",
            "sizes" => "100x100"
          ],
          [
            "src" => "/img_pwa/ios/114.png",
            "sizes" => "114x114"
          ],
          [
            "src" => "/img_pwa/ios/120.png",
            "sizes" => "120x120"
          ],
          [
            "src" => "/img_pwa/ios/128.png",
            "sizes" => "128x128"
          ],
          [
            "src" => "/img_pwa/ios/144.png",
            "sizes" => "144x144"
          ],
          [
            "src" => "/img_pwa/ios/152.png",
            "sizes" => "152x152"
          ],
          [
            "src" => "/img_pwa/ios/167.png",
            "sizes" => "167x167"
          ],
          [
            "src" => "/img_pwa/ios/180.png",
            "sizes" => "180x180"
          ],
          [
            "src" => "/img_pwa/ios/192.png",
            "sizes" => "192x192"
          ],
          [
            "src" => "/img_pwa/ios/256.png",
            "sizes" => "256x256"
          ],
          [
            "src" => "/img_pwa/ios/512.png",
            "sizes" => "512x512"
          ],
          [
            "src" => "/img_pwa/ios/1024.png",
            "sizes" => "1024x1024"
          ],
          [
            "src" => "/img_pwa/windows11/SmallTile.scale-100.png",
            "sizes" => "71x71",
            "purpose" => "maskable"
          ],
          [
            "src" => "/img_pwa/windows11/SmallTile.scale-125.png",
            "sizes" => "89x89",
            "purpose" => "maskable"
          ],
          [
            "src" => "/img_pwa/windows11/SmallTile.scale-150.png",
            "sizes" => "107x107",
            "purpose" => "maskable"
          ],
          [
            "src" => "/img_pwa/windows11/SmallTile.scale-200.png",
            "sizes" => "142x142",
            "purpose" => "maskable"
          ],
          [
            "src" => "/img_pwa/windows11/SmallTile.scale-400.png",
            "sizes" => "284x284",
            "purpose" => "maskable"
          ],
          [
            "src" => "/img_pwa/windows11/Square150x150Logo.scale-100.png",
            "sizes" => "150x150",
            "purpose" => "maskable"
          ],
          [
            "src" => "/img_pwa/windows11/Square150x150Logo.scale-125.png",
            "sizes" => "188x188",
            "purpose" => "maskable"
          ],
          [
            "src" => "/img_pwa/windows11/Square150x150Logo.scale-150.png",
            "sizes" => "225x225",
            "purpose" => "maskable"
          ],
          [
            "src" => "/img_pwa/windows11/Square150x150Logo.scale-200.png",
            "sizes" => "300x300",
            "purpose" => "maskable"
          ],
          [
            "src" => "/img_pwa/windows11/Square150x150Logo.scale-400.png",
            "sizes" => "600x600",
            "purpose" => "maskable"
          ],
          [
            "src" => "/img_pwa/windows11/Wide310x150Logo.scale-100.png",
            "sizes" => "310x150",
            "purpose" => "maskable"
          ],
          [
            "src" => "/img_pwa/windows11/Wide310x150Logo.scale-125.png",
            "sizes" => "388x188",
            "purpose" => "maskable"
          ],
          [
            "src" => "/img_pwa/windows11/Wide310x150Logo.scale-150.png",
            "sizes" => "465x225",
            "purpose" => "maskable"
          ],
          [
            "src" => "/img_pwa/windows11/Wide310x150Logo.scale-200.png",
            "sizes" => "620x300",
            "purpose" => "maskable"
          ],
          [
            "src" => "/img_pwa/windows11/Wide310x150Logo.scale-400.png",
            "sizes" => "1240x600",
            "purpose" => "maskable"
          ],
          [
            "src" => "/img_pwa/windows11/LargeTile.scale-100.png",
            "sizes" => "310x310",
            "purpose" => "maskable"
          ],
          [
            "src" => "/img_pwa/windows11/LargeTile.scale-125.png",
            "sizes" => "388x388",
            "purpose" => "maskable"
          ],
          [
            "src" => "/img_pwa/windows11/LargeTile.scale-150.png",
            "sizes" => "465x465",
            "purpose" => "maskable"
          ],
          [
            "src" => "/img_pwa/windows11/LargeTile.scale-200.png",
            "sizes" => "620x620",
            "purpose" => "maskable"
          ],
          [
            "src" => "/img_pwa/windows11/LargeTile.scale-400.png",
            "sizes" => "1240x1240",
            "purpose" => "maskable"
          ],
          [
            "src" => "/img_pwa/windows11/Square44x44Logo.scale-100.png",
            "sizes" => "44x44",
            "purpose" => "maskable"
          ],
          [
            "src" => "/img_pwa/windows11/Square44x44Logo.scale-125.png",
            "sizes" => "55x55",
            "purpose" => "maskable"
          ],
          [
            "src" => "/img_pwa/windows11/Square44x44Logo.scale-150.png",
            "sizes" => "66x66",
            "purpose" => "maskable"
          ],
          [
            "src" => "/img_pwa/windows11/Square44x44Logo.scale-200.png",
            "sizes" => "88x88",
            "purpose" => "maskable"
          ],
          [
            "src" => "/img_pwa/windows11/Square44x44Logo.scale-400.png",
            "sizes" => "176x176",
            "purpose" => "maskable"
          ],
          [
            "src" => "/img_pwa/windows11/StoreLogo.scale-100.png",
            "sizes" => "50x50",
            "purpose" => "maskable"
          ],
          [
            "src" => "/img_pwa/windows11/StoreLogo.scale-125.png",
            "sizes" => "63x63",
            "purpose" => "maskable"
          ],
          [
            "src" => "/img_pwa/windows11/StoreLogo.scale-150.png",
            "sizes" => "75x75",
            "purpose" => "maskable"
          ],
          [
            "src" => "/img_pwa/windows11/StoreLogo.scale-200.png",
            "sizes" => "100x100",
            "purpose" => "maskable"
          ],
          [
            "src" => "/img_pwa/windows11/StoreLogo.scale-400.png",
            "sizes" => "200x200",
            "purpose" => "maskable"
          ],
          [
            "src" => "/img_pwa/windows11/SplashScreen.scale-100.png",
            "sizes" => "620x300",
            "purpose" => "maskable"
          ],
          [
            "src" => "/img_pwa/windows11/SplashScreen.scale-125.png",
            "sizes" => "775x375",
            "purpose" => "maskable"
          ],
          [
            "src" => "/img_pwa/windows11/SplashScreen.scale-150.png",
            "sizes" => "930x450",
            "purpose" => "maskable"
          ],
          [
            "src" => "/img_pwa/windows11/SplashScreen.scale-200.png",
            "sizes" => "1240x600",
            "purpose" => "maskable"
          ],
          [
            "src" => "/img_pwa/windows11/SplashScreen.scale-400.png",
            "sizes" => "2480x1200",
            "purpose" => "maskable"
          ],
          [
            "src" => "/img_pwa/windows11/Square44x44Logo.targetsize-16.png",
            "sizes" => "16x16",
            "purpose" => "maskable"
          ],
          [
            "src" => "/img_pwa/windows11/Square44x44Logo.targetsize-20.png",
            "sizes" => "20x20",
            "purpose" => "maskable"
          ],
          [
            "src" => "/img_pwa/windows11/Square44x44Logo.targetsize-24.png",
            "sizes" => "24x24",
            "purpose" => "maskable"
          ],
          [
            "src" => "/img_pwa/windows11/Square44x44Logo.targetsize-30.png",
            "sizes" => "30x30",
            "purpose" => "maskable"
          ],
          [
            "src" => "/img_pwa/windows11/Square44x44Logo.targetsize-32.png",
            "sizes" => "32x32",
            "purpose" => "maskable"
          ],
          [
            "src" => "/img_pwa/windows11/Square44x44Logo.targetsize-36.png",
            "sizes" => "36x36",
            "purpose" => "maskable"
          ],
          [
            "src" => "/img_pwa/windows11/Square44x44Logo.targetsize-40.png",
            "sizes" => "40x40",
            "purpose" => "maskable"
          ],
          [
            "src" => "/img_pwa/windows11/Square44x44Logo.targetsize-44.png",
            "sizes" => "44x44",
            "purpose" => "maskable"
          ],
          [
            "src" => "/img_pwa/windows11/Square44x44Logo.targetsize-48.png",
            "sizes" => "48x48",
            "purpose" => "maskable"
          ],
          [
            "src" => "/img_pwa/windows11/Square44x44Logo.targetsize-60.png",
            "sizes" => "60x60",
            "purpose" => "maskable"
          ],
          [
            "src" => "/img_pwa/windows11/Square44x44Logo.targetsize-64.png",
            "sizes" => "64x64",
            "purpose" => "maskable"
          ],
          [
            "src" => "/img_pwa/windows11/Square44x44Logo.targetsize-72.png",
            "sizes" => "72x72",
            "purpose" => "maskable"
          ],
          [
            "src" => "/img_pwa/windows11/Square44x44Logo.targetsize-80.png",
            "sizes" => "80x80",
            "purpose" => "maskable"
          ],
          [
            "src" => "/img_pwa/windows11/Square44x44Logo.targetsize-96.png",
            "sizes" => "96x96",
            "purpose" => "maskable"
          ],
          [
            "src" => "/img_pwa/windows11/Square44x44Logo.targetsize-256.png",
            "sizes" => "256x256",
            "purpose" => "maskable"
          ],
          [
            "src" => "/img_pwa/windows11/Square44x44Logo.altform-unplated_targetsize-16.png",
            "sizes" => "16x16",
            "purpose" => "maskable"
          ],
          [
            "src" => "/img_pwa/windows11/Square44x44Logo.altform-unplated_targetsize-20.png",
            "sizes" => "20x20",
            "purpose" => "maskable"
          ],
          [
            "src" => "/img_pwa/windows11/Square44x44Logo.altform-unplated_targetsize-24.png",
            "sizes" => "24x24",
            "purpose" => "maskable"
          ],
          [
            "src" => "/img_pwa/windows11/Square44x44Logo.altform-unplated_targetsize-30.png",
            "sizes" => "30x30",
            "purpose" => "maskable"
          ],
          [
            "src" => "/img_pwa/windows11/Square44x44Logo.altform-unplated_targetsize-32.png",
            "sizes" => "32x32",
            "purpose" => "maskable"
          ],
          [
            "src" => "/img_pwa/windows11/Square44x44Logo.altform-unplated_targetsize-36.png",
            "sizes" => "36x36",
            "purpose" => "maskable"
          ],
          [
            "src" => "/img_pwa/windows11/Square44x44Logo.altform-unplated_targetsize-40.png",
            "sizes" => "40x40",
            "purpose" => "maskable"
          ],
          [
            "src" => "/img_pwa/windows11/Square44x44Logo.altform-unplated_targetsize-44.png",
            "sizes" => "44x44",
            "purpose" => "maskable"
          ],
          [
            "src" => "/img_pwa/windows11/Square44x44Logo.altform-unplated_targetsize-48.png",
            "sizes" => "48x48",
            "purpose" => "maskable"
          ],
          [
            "src" => "/img_pwa/windows11/Square44x44Logo.altform-unplated_targetsize-60.png",
            "sizes" => "60x60",
            "purpose" => "maskable"
          ],
          [
            "src" => "/img_pwa/windows11/Square44x44Logo.altform-unplated_targetsize-64.png",
            "sizes" => "64x64",
            "purpose" => "maskable"
          ],
          [
            "src" => "/img_pwa/windows11/Square44x44Logo.altform-unplated_targetsize-72.png",
            "sizes" => "72x72",
            "purpose" => "maskable"
          ],
          [
            "src" => "/img_pwa/windows11/Square44x44Logo.altform-unplated_targetsize-80.png",
            "sizes" => "80x80",
            "purpose" => "maskable"
          ],
          [
            "src" => "/img_pwa/windows11/Square44x44Logo.altform-unplated_targetsize-96.png",
            "sizes" => "96x96",
            "purpose" => "maskable"
          ],
          [
            "src" => "/img_pwa/windows11/Square44x44Logo.altform-unplated_targetsize-256.png",
            "sizes" => "256x256",
            "purpose" => "maskable"
          ],
          [
            "src" => "/img_pwa/windows11/Square44x44Logo.altform-lightunplated_targetsize-16.png",
            "sizes" => "16x16",
            "purpose" => "maskable"
          ],
          [
            "src" => "/img_pwa/windows11/Square44x44Logo.altform-lightunplated_targetsize-20.png",
            "sizes" => "20x20",
            "purpose" => "maskable"
          ],
          [
            "src" => "/img_pwa/windows11/Square44x44Logo.altform-lightunplated_targetsize-24.png",
            "sizes" => "24x24",
            "purpose" => "maskable"
          ],
          [
            "src" => "/img_pwa/windows11/Square44x44Logo.altform-lightunplated_targetsize-30.png",
            "sizes" => "30x30",
            "purpose" => "maskable"
          ],
          [
            "src" => "/img_pwa/windows11/Square44x44Logo.altform-lightunplated_targetsize-32.png",
            "sizes" => "32x32",
            "purpose" => "maskable"
          ],
          [
            "src" => "/img_pwa/windows11/Square44x44Logo.altform-lightunplated_targetsize-36.png",
            "sizes" => "36x36",
            "purpose" => "maskable"
          ],
          [
            "src" => "/img_pwa/windows11/Square44x44Logo.altform-lightunplated_targetsize-40.png",
            "sizes" => "40x40",
            "purpose" => "maskable"
          ],
          [
            "src" => "/img_pwa/windows11/Square44x44Logo.altform-lightunplated_targetsize-44.png",
            "sizes" => "44x44",
            "purpose" => "maskable"
          ],
          [
            "src" => "/img_pwa/windows11/Square44x44Logo.altform-lightunplated_targetsize-48.png",
            "sizes" => "48x48",
            "purpose" => "maskable"
          ],
          [
            "src" => "/img_pwa/windows11/Square44x44Logo.altform-lightunplated_targetsize-60.png",
            "sizes" => "60x60",
            "purpose" => "maskable"
          ],
          [
            "src" => "/img_pwa/windows11/Square44x44Logo.altform-lightunplated_targetsize-64.png",
            "sizes" => "64x64",
            "purpose" => "maskable"
          ],
          [
            "src" => "/img_pwa/windows11/Square44x44Logo.altform-lightunplated_targetsize-72.png",
            "sizes" => "72x72",
            "purpose" => "maskable"
          ],
          [
            "src" => "/img_pwa/windows11/Square44x44Logo.altform-lightunplated_targetsize-80.png",
            "sizes" => "80x80",
            "purpose" => "maskable"
          ],
          [
            "src" => "/img_pwa/windows11/Square44x44Logo.altform-lightunplated_targetsize-96.png",
            "sizes" => "96x96",
            "purpose" => "maskable"
          ],
          [
            "src" => "/img_pwa/windows11/Square44x44Logo.altform-lightunplated_targetsize-256.png",
            "sizes" => "256x256",
            "purpose" => "maskable"
          ],
          [
            "src" => "/img_pwa/android/android-launchericon-512-512.png",
            "sizes" => "512x512",
            "purpose" => "maskable"
          ],
          [
            "src" => "/img_pwa/android/android-launchericon-192-192.png",
            "sizes" => "192x192",
            "purpose" => "maskable"
          ],
          [
            "src" => "/img_pwa/android/android-launchericon-144-144.png",
            "sizes" => "144x144",
            "purpose" => "maskable"
          ],
          [
            "src" => "/img_pwa/android/android-launchericon-96-96.png",
            "sizes" => "96x96",
            "purpose" => "maskable"
          ],
          [
            "src" => "/img_pwa/android/android-launchericon-72-72.png",
            "sizes" => "72x72",
            "purpose" => "maskable"
          ],
          [
            "src" => "/img_pwa/android/android-launchericon-48-48.png",
            "sizes" => "48x48",
            "purpose" => "maskable"
          ],
          [
            "src" => "/img_pwa/ios/16.png",
            "sizes" => "16x16",
            "purpose" => "maskable"
          ],
          [
            "src" => "/img_pwa/ios/20.png",
            "sizes" => "20x20",
            "purpose" => "maskable"
          ],
          [
            "src" => "/img_pwa/ios/29.png",
            "sizes" => "29x29",
            "purpose" => "maskable"
          ],
          [
            "src" => "/img_pwa/ios/32.png",
            "sizes" => "32x32",
            "purpose" => "maskable"
          ],
          [
            "src" => "/img_pwa/ios/40.png",
            "sizes" => "40x40",
            "purpose" => "maskable"
          ],
          [
            "src" => "/img_pwa/ios/50.png",
            "sizes" => "50x50",
            "purpose" => "maskable"
          ],
          [
            "src" => "/img_pwa/ios/57.png",
            "sizes" => "57x57",
            "purpose" => "maskable"
          ],
          [
            "src" => "/img_pwa/ios/58.png",
            "sizes" => "58x58",
            "purpose" => "maskable"
          ],
          [
            "src" => "/img_pwa/ios/60.png",
            "sizes" => "60x60",
            "purpose" => "maskable"
          ],
          [
            "src" => "/img_pwa/ios/64.png",
            "sizes" => "64x64",
            "purpose" => "maskable"
          ],
          [
            "src" => "/img_pwa/ios/72.png",
            "sizes" => "72x72",
            "purpose" => "maskable"
          ],
          [
            "src" => "/img_pwa/ios/76.png",
            "sizes" => "76x76",
            "purpose" => "maskable"
          ],
          [
            "src" => "/img_pwa/ios/80.png",
            "sizes" => "80x80",
            "purpose" => "maskable"
          ],
          [
            "src" => "/img_pwa/ios/87.png",
            "sizes" => "87x87",
            "purpose" => "maskable"
          ],
          [
            "src" => "/img_pwa/ios/100.png",
            "sizes" => "100x100",
            "purpose" => "maskable"
          ],
          [
            "src" => "/img_pwa/ios/114.png",
            "sizes" => "114x114",
            "purpose" => "maskable"
          ],
          [
            "src" => "/img_pwa/ios/120.png",
            "sizes" => "120x120",
            "purpose" => "maskable"
          ],
          [
            "src" => "/img_pwa/ios/128.png",
            "sizes" => "128x128",
            "purpose" => "maskable"
          ],
          [
            "src" => "/img_pwa/ios/144.png",
            "sizes" => "144x144",
            "purpose" => "maskable"
          ],
          [
            "src" => "/img_pwa/ios/152.png",
            "sizes" => "152x152",
            "purpose" => "maskable"
          ],
          [
            "src" => "/img_pwa/ios/167.png",
            "sizes" => "167x167",
            "purpose" => "maskable"
          ],
          [
            "src" => "/img_pwa/ios/180.png",
            "sizes" => "180x180",
            "purpose" => "maskable"
          ],
          [
            "src" => "/img_pwa/ios/192.png",
            "sizes" => "192x192",
            "purpose" => "maskable"
          ],
          [
            "src" => "/img_pwa/ios/256.png",
            "sizes" => "256x256",
            "purpose" => "maskable"
          ],
          [
            "src" => "/img_pwa/ios/512.png",
            "sizes" => "512x512",
            "purpose" => "maskable"
          ],
          [
            "src" => "/img_pwa/ios/1024.png",
            "sizes" => "1024x1024",
            "purpose" => "maskable"
          ],
        ],
      ]
    ]
  ],

  /*
    |--------------------------------------------------------------------------
    | Debug Configuration
    |--------------------------------------------------------------------------
    | Toggles the application's debug mode based on the environment variable
    */

  'debug' => env('APP_DEBUG', false),

];