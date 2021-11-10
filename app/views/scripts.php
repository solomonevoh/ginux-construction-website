<?php
//Create an array of scripts to be included.
const SCRIPTS = [
            'js'  => [
                'main'=> 'script.js',
                'parallax' => 'parallax.min.js',
                'modal' => 'modal.js',
                'popper'=> 'popper.min.js',
                'bootstrap'=> 'bootstrap.min.js',
                'jqueryUI'=> 'jquery-ui.js',
                'jqueryEasing'=> 'jquery.easing.1.3.min.js',
                'wow'=> 'wow.js',
                'datetime'=> 'datetime.js',
                'moment'=> 'moment.min.js',
                'numeral'=> 'numeral.min.js',
                'util'=> 'util.js',
                'datepicker' => 'jquery-ui.js'
              ],
            'datatables' => [
                'datatablesJquery'=> 'jquery.dataTables.js',
                'datatablesResponsive'=> 'dataTables.responsive.min.js',
                'datatablesBootstrap'=> 'responsive.bootstrap4.min.js',
                'adminLte'  => 'adminlte.min.js',
                'jqueryEase'=> 'jquery.easing.1.3.min.js',
                'jQueryDatatable'=> 'jquery.dataTables.js',
                'datatable'=> 'datatables.min.js',
                'responsiveBootstrap'  => 'responsive.bootstrap4.js',
                'pdf'                 => 'pdfmake.min.js',
                'buttons'             => 'buttons.js',
                'flash'               => 'pdfmake.min.js',
                'datatableButtons'    => 'dataTables.buttons.js',
                'jszip'               => 'jszip.js',
                'vfs'                 => 'vfs_fonts.js',
                'htmlButtons'         => 'buttons.html5.js',
                'print'               => 'buttons.print.js'
                ],
              'apps'  => [
                'comboDate'=> 'comboDate.js',
                'scroll'=> 'pageScroll.js',
                'fileHandle'=> 'fileHandling.js',
                'formStep'=> 'formStepStore.js',
                'formValidation'=> 'FormValidation.js',
                'verCenters'=> 'verificationCenters.js',
                'help'=> 'HelpSearch.js',
                'carousel'=> 'carousel.js'
                  ]
                ];
//Count total scripts included
  function echoScript($array)
  {
      //Get directory.
      $dir = URLROOT."/js/";
      echo '<script src="'.$dir.'jquery_3.0.js"></script>';
      echo "\n";

      foreach ($array as $script) {
          //find the scripts in apps folder
          //if the script is an array, use key as folder

          if (is_array($script)) {
              foreach ($script as $key => $value) {
                  if (is_array($value)) {
                      if ($key == 'js') {
                          $dir = URLROOT."/$key/";
                      } else {
                          $dir = URLROOT."/js/$key/";
                      }

                      foreach ($value as $script) {
                          echo '<script src="'.$dir.SCRIPTS[$key][$script].'"></script>';
                          echo "\n";
                      }
                  } else {
                      $dir = URLROOT."/js/";
                      echo '<script src="'.$dir.SCRIPTS[$key][$value].'"></script>';
                      echo "\n";
                  }
              }
          }
      }
  }
