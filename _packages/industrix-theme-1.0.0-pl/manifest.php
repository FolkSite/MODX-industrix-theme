<?php return array (
  'manifest-version' => '1.1',
  'manifest-attributes' => 
  array (
    'license' => 'The MIT License (MIT)

Copyright (c) 2015 MODX Systems, LLC (hello@modx.com) 

Permission is hereby granted, free of charge, to any person obtaining a copy
of this software and associated documentation files (the "Software"), to deal
in the Software without restriction, including without limitation the rights
to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
copies of the Software, and to permit persons to whom the Software is
furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in
all copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
THE SOFTWARE.',
    'readme' => '# Industrix Theme

MODX 2.4 Theme with nearly every layout combination possible in the MXT Theme Framework.
',
    'changelog' => '# Industrix Theme 1.0.0
- Basic Package with Config Extra. Grid, Gallery, Listing, and Page Layouts via MXT Theme System.
',
    'setup-options' => 'industrix-theme-1.0.0-pl/setup-options.php',
    'requires' => 
    array (
      'mxt' => '>=1.2.1',
      'getresources' => '>=1.6.0',
      'FormIt' => '>=2.2.7',
      'phpThumbOf' => '>=1.4.0',
      'clientconfig' => '>=1.3.0',
    ),
  ),
  'manifest-vehicles' => 
  array (
    0 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modNamespace',
      'guid' => 'd6d21fc7f7740a3bf98515a13ae30391',
      'native_key' => 'industrix-theme',
      'filename' => 'modNamespace/f8d4ca573cd92c91bc31be6bd462129f.vehicle',
      'namespace' => 'industrix-theme',
    ),
    1 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modCategory',
      'guid' => 'ec9a4c7c2b3f0b040123fea04431a409',
      'native_key' => NULL,
      'filename' => 'modCategory/eac235c0e4fbcfefbef6224239fb5ebf.vehicle',
      'namespace' => 'industrix-theme',
    ),
  ),
);