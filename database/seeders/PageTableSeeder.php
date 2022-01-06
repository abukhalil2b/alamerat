<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Page;
class PageTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$pages = [
  ['id' => '1','descr' => 'الفاتحة','in_juz' => '1'],
  ['id' => '2','descr' => 'البقرة','in_juz' => '1'],
  ['id' => '3','descr' => 'البقرة','in_juz' => '1'],
  ['id' => '4','descr' => 'البقرة','in_juz' => '1'],
  ['id' => '5','descr' => 'البقرة','in_juz' => '1'],
  ['id' => '6','descr' => 'البقرة','in_juz' => '1'],
  ['id' => '7','descr' => 'البقرة','in_juz' => '1'],
  ['id' => '8','descr' => 'البقرة','in_juz' => '1'],
  ['id' => '9','descr' => 'البقرة','in_juz' => '1'],
  ['id' => '10','descr' => 'البقرة','in_juz' => '1'],
  ['id' => '11','descr' => 'البقرة','in_juz' => '1'],
  ['id' => '12','descr' => 'البقرة','in_juz' => '1'],
  ['id' => '13','descr' => 'البقرة','in_juz' => '1'],
  ['id' => '14','descr' => 'البقرة','in_juz' => '1'],
  ['id' => '15','descr' => 'البقرة','in_juz' => '1'],
  ['id' => '16','descr' => 'البقرة','in_juz' => '1'],
  ['id' => '17','descr' => 'البقرة','in_juz' => '1'],
  ['id' => '18','descr' => 'البقرة','in_juz' => '1'],
  ['id' => '19','descr' => 'البقرة','in_juz' => '1'],
  ['id' => '20','descr' => 'البقرة','in_juz' => '1'],
  ['id' => '21','descr' => 'البقرة','in_juz' => '1'],
  ['id' => '22','descr' => 'البقرة','in_juz' => '2'],
  ['id' => '23','descr' => 'البقرة','in_juz' => '2'],
  ['id' => '24','descr' => 'البقرة','in_juz' => '2'],
  ['id' => '25','descr' => 'البقرة','in_juz' => '2'],
  ['id' => '26','descr' => 'البقرة','in_juz' => '2'],
  ['id' => '27','descr' => 'البقرة','in_juz' => '2'],
  ['id' => '28','descr' => 'البقرة','in_juz' => '2'],
  ['id' => '29','descr' => 'البقرة','in_juz' => '2'],
  ['id' => '30','descr' => 'البقرة','in_juz' => '2'],
  ['id' => '31','descr' => 'البقرة','in_juz' => '2'],
  ['id' => '32','descr' => 'البقرة','in_juz' => '2'],
  ['id' => '33','descr' => 'البقرة','in_juz' => '2'],
  ['id' => '34','descr' => 'البقرة','in_juz' => '2'],
  ['id' => '35','descr' => 'البقرة','in_juz' => '2'],
  ['id' => '36','descr' => 'البقرة','in_juz' => '2'],
  ['id' => '37','descr' => 'البقرة','in_juz' => '2'],
  ['id' => '38','descr' => 'البقرة','in_juz' => '2'],
  ['id' => '39','descr' => 'البقرة','in_juz' => '2'],
  ['id' => '40','descr' => 'البقرة','in_juz' => '2'],
  ['id' => '41','descr' => 'البقرة','in_juz' => '2'],
  ['id' => '42','descr' => 'البقرة','in_juz' => '2'],
  ['id' => '43','descr' => 'البقرة','in_juz' => '3'],
  ['id' => '44','descr' => 'البقرة','in_juz' => '3'],
  ['id' => '45','descr' => 'البقرة','in_juz' => '3'],
  ['id' => '46','descr' => 'البقرة','in_juz' => '3'],
  ['id' => '47','descr' => 'البقرة','in_juz' => '3'],
  ['id' => '48','descr' => 'البقرة','in_juz' => '3'],
  ['id' => '49','descr' => 'البقرة','in_juz' => '3'],
  ['id' => '50','descr' => 'آل عمران','in_juz' => '3'],
  ['id' => '51','descr' => 'آل عمران','in_juz' => '3'],
  ['id' => '52','descr' => 'آل عمران','in_juz' => '3'],
  ['id' => '53','descr' => 'آل عمران','in_juz' => '3'],
  ['id' => '54','descr' => 'آل عمران','in_juz' => '3'],
  ['id' => '55','descr' => 'آل عمران','in_juz' => '3'],
  ['id' => '56','descr' => 'آل عمران','in_juz' => '3'],
  ['id' => '57','descr' => 'آل عمران','in_juz' => '3'],
  ['id' => '58','descr' => 'آل عمران','in_juz' => '3'],
  ['id' => '59','descr' => 'آل عمران','in_juz' => '3'],
  ['id' => '60','descr' => 'آل عمران','in_juz' => '3'],
  ['id' => '61','descr' => 'آل عمران','in_juz' => '3'],
  ['id' => '62','descr' => 'آل عمران','in_juz' => '4'],
  ['id' => '63','descr' => 'آل عمران','in_juz' => '4'],
  ['id' => '64','descr' => 'آل عمران','in_juz' => '4'],
  ['id' => '65','descr' => 'آل عمران','in_juz' => '4'],
  ['id' => '66','descr' => 'آل عمران','in_juz' => '4'],
  ['id' => '67','descr' => 'آل عمران','in_juz' => '4'],
  ['id' => '68','descr' => 'آل عمران','in_juz' => '4'],
  ['id' => '69','descr' => 'آل عمران','in_juz' => '4'],
  ['id' => '70','descr' => 'آل عمران','in_juz' => '4'],
  ['id' => '71','descr' => 'آل عمران','in_juz' => '4'],
  ['id' => '72','descr' => 'آل عمران','in_juz' => '4'],
  ['id' => '73','descr' => 'آل عمران','in_juz' => '4'],
  ['id' => '74','descr' => 'آل عمران','in_juz' => '4'],
  ['id' => '75','descr' => 'آل عمران','in_juz' => '4'],
  ['id' => '76','descr' => 'آل عمران','in_juz' => '4'],
  ['id' => '77','descr' => 'النساء','in_juz' => '4'],
  ['id' => '78','descr' => 'النساء','in_juz' => '4'],
  ['id' => '79','descr' => 'النساء','in_juz' => '4'],
  ['id' => '80','descr' => 'النساء','in_juz' => '4'],
  ['id' => '81','descr' => 'النساء','in_juz' => '4'],
  ['id' => '82','descr' => 'النساء','in_juz' => '5'],
  ['id' => '83','descr' => 'النساء','in_juz' => '5'],
  ['id' => '84','descr' => 'النساء','in_juz' => '5'],
  ['id' => '85','descr' => 'النساء','in_juz' => '5'],
  ['id' => '86','descr' => 'النساء','in_juz' => '5'],
  ['id' => '87','descr' => 'النساء','in_juz' => '5'],
  ['id' => '88','descr' => 'النساء','in_juz' => '5'],
  ['id' => '89','descr' => 'النساء','in_juz' => '5'],
  ['id' => '90','descr' => 'النساء','in_juz' => '5'],
  ['id' => '91','descr' => 'النساء','in_juz' => '5'],
  ['id' => '92','descr' => 'النساء','in_juz' => '5'],
  ['id' => '93','descr' => 'النساء','in_juz' => '5'],
  ['id' => '94','descr' => 'النساء','in_juz' => '5'],
  ['id' => '95','descr' => 'النساء','in_juz' => '5'],
  ['id' => '96','descr' => 'النساء','in_juz' => '5'],
  ['id' => '97','descr' => 'النساء','in_juz' => '5'],
  ['id' => '98','descr' => 'النساء','in_juz' => '5'],
  ['id' => '99','descr' => 'النساء','in_juz' => '5'],
  ['id' => '100','descr' => 'النساء','in_juz' => '5'],
  ['id' => '101','descr' => 'النساء','in_juz' => '5'],
  ['id' => '102','descr' => 'النساء','in_juz' => '6'],
  ['id' => '103','descr' => 'النساء','in_juz' => '6'],
  ['id' => '104','descr' => 'النساء','in_juz' => '6'],
  ['id' => '105','descr' => 'النساء','in_juz' => '6'],
  ['id' => '106','descr' => 'النساء وبداية المائدة','in_juz' => '6'],
  ['id' => '107','descr' => 'المائدة','in_juz' => '6'],
  ['id' => '108','descr' => 'المائدة','in_juz' => '6'],
  ['id' => '109','descr' => 'المائدة','in_juz' => '6'],
  ['id' => '110','descr' => 'المائدة','in_juz' => '6'],
  ['id' => '111','descr' => 'المائدة','in_juz' => '6'],
  ['id' => '112','descr' => 'المائدة','in_juz' => '6'],
  ['id' => '113','descr' => 'المائدة','in_juz' => '6'],
  ['id' => '114','descr' => 'المائدة','in_juz' => '6'],
  ['id' => '115','descr' => 'المائدة','in_juz' => '6'],
  ['id' => '116','descr' => 'المائدة','in_juz' => '6'],
  ['id' => '117','descr' => 'المائدة','in_juz' => '6'],
  ['id' => '118','descr' => 'المائدة','in_juz' => '6'],
  ['id' => '119','descr' => 'المائدة','in_juz' => '6'],
  ['id' => '120','descr' => 'المائدة','in_juz' => '6'],
  ['id' => '121','descr' => 'المائدة','in_juz' => '6'],
  ['id' => '122','descr' => 'المائدة','in_juz' => '7'],
  ['id' => '123','descr' => 'المائدة','in_juz' => '7'],
  ['id' => '124','descr' => 'المائدة','in_juz' => '7'],
  ['id' => '125','descr' => 'المائدة','in_juz' => '7'],
  ['id' => '126','descr' => 'المائدة','in_juz' => '7'],
  ['id' => '127','descr' => 'المائدة','in_juz' => '7'],
  ['id' => '128','descr' => 'الأنعام','in_juz' => '7'],
  ['id' => '129','descr' => 'الأنعام','in_juz' => '7'],
  ['id' => '130','descr' => 'الأنعام','in_juz' => '7'],
  ['id' => '131','descr' => 'الأنعام','in_juz' => '7'],
  ['id' => '132','descr' => 'الأنعام','in_juz' => '7'],
  ['id' => '133','descr' => 'الأنعام','in_juz' => '7'],
  ['id' => '134','descr' => 'الأنعام','in_juz' => '7'],
  ['id' => '135','descr' => 'الأنعام','in_juz' => '7'],
  ['id' => '136','descr' => 'الأنعام','in_juz' => '7'],
  ['id' => '137','descr' => 'الأنعام','in_juz' => '7'],
  ['id' => '138','descr' => 'الأنعام','in_juz' => '7'],
  ['id' => '139','descr' => 'الأنعام','in_juz' => '7'],
  ['id' => '140','descr' => 'الأنعام','in_juz' => '7'],
  ['id' => '141','descr' => 'الأنعام','in_juz' => '7'],
  ['id' => '142','descr' => 'الأنعام','in_juz' => '8'],
  ['id' => '143','descr' => 'الأنعام','in_juz' => '8'],
  ['id' => '144','descr' => 'الأنعام','in_juz' => '8'],
  ['id' => '145','descr' => 'الأنعام','in_juz' => '8'],
  ['id' => '146','descr' => 'الأنعام','in_juz' => '8'],
  ['id' => '147','descr' => 'الأنعام','in_juz' => '8'],
  ['id' => '148','descr' => 'الأنعام','in_juz' => '8'],
  ['id' => '149','descr' => 'الأنعام','in_juz' => '8'],
  ['id' => '150','descr' => 'الأنعام','in_juz' => '8'],
  ['id' => '151','descr' => 'الأعراف','in_juz' => '8'],
  ['id' => '152','descr' => 'الأعراف','in_juz' => '8'],
  ['id' => '153','descr' => 'الأعراف','in_juz' => '8'],
  ['id' => '154','descr' => 'الأعراف','in_juz' => '8'],
  ['id' => '155','descr' => 'الأعراف','in_juz' => '8'],
  ['id' => '156','descr' => 'الأعراف','in_juz' => '8'],
  ['id' => '157','descr' => 'الأعراف','in_juz' => '8'],
  ['id' => '158','descr' => 'الأعراف','in_juz' => '8'],
  ['id' => '159','descr' => 'الأعراف','in_juz' => '8'],
  ['id' => '160','descr' => 'الأعراف','in_juz' => '8'],
  ['id' => '161','descr' => 'الأعراف','in_juz' => '8'],
  ['id' => '162','descr' => 'الأعراف','in_juz' => '9'],
  ['id' => '163','descr' => 'الأعراف','in_juz' => '9'],
  ['id' => '164','descr' => 'الأعراف','in_juz' => '9'],
  ['id' => '165','descr' => 'الأعراف','in_juz' => '9'],
  ['id' => '166','descr' => 'الأعراف','in_juz' => '9'],
  ['id' => '167','descr' => 'الأعراف','in_juz' => '9'],
  ['id' => '168','descr' => 'الأعراف','in_juz' => '9'],
  ['id' => '169','descr' => 'الأعراف','in_juz' => '9'],
  ['id' => '170','descr' => 'الأعراف','in_juz' => '9'],
  ['id' => '171','descr' => 'الأعراف','in_juz' => '9'],
  ['id' => '172','descr' => 'الأعراف','in_juz' => '9'],
  ['id' => '173','descr' => 'الأعراف','in_juz' => '9'],
  ['id' => '174','descr' => 'الأعراف','in_juz' => '9'],
  ['id' => '175','descr' => 'الأعراف','in_juz' => '9'],
  ['id' => '176','descr' => 'الأعراف','in_juz' => '9'],
  ['id' => '177','descr' => 'الأنفال','in_juz' => '9'],
  ['id' => '178','descr' => 'الأنفال','in_juz' => '9'],
  ['id' => '179','descr' => 'الأنفال','in_juz' => '9'],
  ['id' => '180','descr' => 'الأنفال','in_juz' => '9'],
  ['id' => '181','descr' => 'الأنفال','in_juz' => '9'],
  ['id' => '182','descr' => 'الأنفال','in_juz' => '10'],
  ['id' => '183','descr' => 'الأنفال','in_juz' => '10'],
  ['id' => '184','descr' => 'الأنفال','in_juz' => '10'],
  ['id' => '185','descr' => 'الأنفال','in_juz' => '10'],
  ['id' => '186','descr' => 'الأنفال','in_juz' => '10'],
  ['id' => '187','descr' => 'التوبة','in_juz' => '10'],
  ['id' => '188','descr' => 'التوبة','in_juz' => '10'],
  ['id' => '189','descr' => 'التوبة','in_juz' => '10'],
  ['id' => '190','descr' => 'التوبة','in_juz' => '10'],
  ['id' => '191','descr' => 'التوبة','in_juz' => '10'],
  ['id' => '192','descr' => 'التوبة','in_juz' => '10'],
  ['id' => '193','descr' => 'التوبة','in_juz' => '10'],
  ['id' => '194','descr' => 'التوبة','in_juz' => '10'],
  ['id' => '195','descr' => 'التوبة','in_juz' => '10'],
  ['id' => '196','descr' => 'التوبة','in_juz' => '10'],
  ['id' => '197','descr' => 'التوبة','in_juz' => '10'],
  ['id' => '198','descr' => 'التوبة','in_juz' => '10'],
  ['id' => '199','descr' => 'التوبة','in_juz' => '10'],
  ['id' => '200','descr' => 'التوبة','in_juz' => '10'],
  ['id' => '201','descr' => 'التوبة','in_juz' => '10'],
  ['id' => '202','descr' => 'التوبة','in_juz' => '11'],
  ['id' => '203','descr' => 'التوبة','in_juz' => '11'],
  ['id' => '204','descr' => 'التوبة','in_juz' => '11'],
  ['id' => '205','descr' => 'التوبة','in_juz' => '11'],
  ['id' => '206','descr' => 'التوبة','in_juz' => '11'],
  ['id' => '207','descr' => 'التوبة','in_juz' => '11'],
  ['id' => '208','descr' => 'يونس','in_juz' => '11'],
  ['id' => '209','descr' => 'يونس','in_juz' => '11'],
  ['id' => '210','descr' => 'يونس','in_juz' => '11'],
  ['id' => '211','descr' => 'يونس','in_juz' => '11'],
  ['id' => '212','descr' => 'يونس','in_juz' => '11'],
  ['id' => '213','descr' => 'يونس','in_juz' => '11'],
  ['id' => '214','descr' => 'يونس','in_juz' => '11'],
  ['id' => '215','descr' => 'يونس','in_juz' => '11'],
  ['id' => '216','descr' => 'يونس','in_juz' => '11'],
  ['id' => '217','descr' => 'يونس','in_juz' => '11'],
  ['id' => '218','descr' => 'يونس','in_juz' => '11'],
  ['id' => '219','descr' => 'يونس','in_juz' => '11'],
  ['id' => '220','descr' => 'يونس','in_juz' => '11'],
  ['id' => '221','descr' => 'يونس وبداية سورة هود','in_juz' => '11'],
  ['id' => '222','descr' => 'هود','in_juz' => '12'],
  ['id' => '223','descr' => 'هود','in_juz' => '12'],
  ['id' => '224','descr' => 'هود','in_juz' => '12'],
  ['id' => '225','descr' => 'هود','in_juz' => '12'],
  ['id' => '226','descr' => 'هود','in_juz' => '12'],
  ['id' => '227','descr' => 'هود','in_juz' => '12'],
  ['id' => '228','descr' => 'هود','in_juz' => '12'],
  ['id' => '229','descr' => 'هود','in_juz' => '12'],
  ['id' => '230','descr' => 'هود','in_juz' => '12'],
  ['id' => '231','descr' => 'هود','in_juz' => '12'],
  ['id' => '232','descr' => 'هود','in_juz' => '12'],
  ['id' => '233','descr' => 'هود','in_juz' => '12'],
  ['id' => '234','descr' => 'هود','in_juz' => '12'],
  ['id' => '235','descr' => 'هود وبداية سورة يوسف','in_juz' => '12'],
  ['id' => '236','descr' => 'يوسف','in_juz' => '12'],
  ['id' => '237','descr' => 'يوسف','in_juz' => '12'],
  ['id' => '238','descr' => 'يوسف','in_juz' => '12'],
  ['id' => '239','descr' => 'يوسف','in_juz' => '12'],
  ['id' => '240','descr' => 'يوسف','in_juz' => '12'],
  ['id' => '241','descr' => 'يوسف','in_juz' => '12'],
  ['id' => '242','descr' => 'يوسف','in_juz' => '13'],
  ['id' => '243','descr' => 'يوسف','in_juz' => '13'],
  ['id' => '244','descr' => 'يوسف','in_juz' => '13'],
  ['id' => '245','descr' => 'يوسف','in_juz' => '13'],
  ['id' => '246','descr' => 'يوسف','in_juz' => '13'],
  ['id' => '247','descr' => 'يوسف','in_juz' => '13'],
  ['id' => '248','descr' => 'يوسف','in_juz' => '13'],
  ['id' => '249','descr' => 'الرعد','in_juz' => '13'],
  ['id' => '250','descr' => 'الرعد','in_juz' => '13'],
  ['id' => '251','descr' => 'الرعد','in_juz' => '13'],
  ['id' => '252','descr' => 'الرعد','in_juz' => '13'],
  ['id' => '253','descr' => 'الرعد','in_juz' => '13'],
  ['id' => '254','descr' => 'الرعد','in_juz' => '13'],
  ['id' => '255','descr' => 'الرعد وبداية سورة إبراهيم','in_juz' => '13'],
  ['id' => '256','descr' => 'إبراهيم','in_juz' => '13'],
  ['id' => '257','descr' => 'إبراهيم','in_juz' => '13'],
  ['id' => '258','descr' => 'إبراهيم','in_juz' => '13'],
  ['id' => '259','descr' => 'إبراهيم','in_juz' => '13'],
  ['id' => '260','descr' => 'إبراهيم','in_juz' => '13'],
  ['id' => '261','descr' => 'إبراهيم','in_juz' => '13'],
  ['id' => '262','descr' => 'الحجر','in_juz' => '14'],
  ['id' => '263','descr' => 'الحجر','in_juz' => '14'],
  ['id' => '264','descr' => 'الحجر','in_juz' => '14'],
  ['id' => '265','descr' => 'الحجر','in_juz' => '14'],
  ['id' => '266','descr' => 'الحجر','in_juz' => '14'],
  ['id' => '267','descr' => 'الحجر وبداية سورة النحل','in_juz' => '14'],
  ['id' => '268','descr' => 'النحل','in_juz' => '14'],
  ['id' => '269','descr' => 'النحل','in_juz' => '14'],
  ['id' => '270','descr' => 'النحل','in_juz' => '14'],
  ['id' => '271','descr' => 'النحل','in_juz' => '14'],
  ['id' => '272','descr' => 'النحل','in_juz' => '14'],
  ['id' => '273','descr' => 'النحل','in_juz' => '14'],
  ['id' => '274','descr' => 'النحل','in_juz' => '14'],
  ['id' => '275','descr' => 'النحل','in_juz' => '14'],
  ['id' => '276','descr' => 'النحل','in_juz' => '14'],
  ['id' => '277','descr' => 'النحل','in_juz' => '14'],
  ['id' => '278','descr' => 'النحل','in_juz' => '14'],
  ['id' => '279','descr' => 'النحل','in_juz' => '14'],
  ['id' => '280','descr' => 'النحل','in_juz' => '14'],
  ['id' => '281','descr' => 'النحل','in_juz' => '14'],
  ['id' => '282','descr' => 'الإسراء','in_juz' => '15'],
  ['id' => '283','descr' => 'الإسراء','in_juz' => '15'],
  ['id' => '284','descr' => 'الإسراء','in_juz' => '15'],
  ['id' => '285','descr' => 'الإسراء','in_juz' => '15'],
  ['id' => '286','descr' => 'الإسراء','in_juz' => '15'],
  ['id' => '287','descr' => 'الإسراء','in_juz' => '15'],
  ['id' => '288','descr' => 'الإسراء','in_juz' => '15'],
  ['id' => '289','descr' => 'الإسراء','in_juz' => '15'],
  ['id' => '290','descr' => 'الإسراء','in_juz' => '15'],
  ['id' => '291','descr' => 'الإسراء','in_juz' => '15'],
  ['id' => '292','descr' => 'الإسراء','in_juz' => '15'],
  ['id' => '293','descr' => 'الإسراء وبداية سورة الكهف','in_juz' => '15'],
  ['id' => '294','descr' => 'الكهف','in_juz' => '15'],
  ['id' => '295','descr' => 'الكهف','in_juz' => '15'],
  ['id' => '296','descr' => 'الكهف','in_juz' => '15'],
  ['id' => '297','descr' => 'الكهف','in_juz' => '15'],
  ['id' => '298','descr' => 'الكهف','in_juz' => '15'],
  ['id' => '299','descr' => 'الكهف','in_juz' => '15'],
  ['id' => '300','descr' => 'الكهف','in_juz' => '15'],
  ['id' => '301','descr' => 'الكهف','in_juz' => '15'],
  ['id' => '302','descr' => 'الكهف','in_juz' => '15'],
  ['id' => '303','descr' => 'الكهف','in_juz' => '16'],
  ['id' => '304','descr' => 'الكهف','in_juz' => '16'],
  ['id' => '305','descr' => 'مريم','in_juz' => '16'],
  ['id' => '306','descr' => 'مريم','in_juz' => '16'],
  ['id' => '307','descr' => 'مريم','in_juz' => '16'],
  ['id' => '308','descr' => 'مريم','in_juz' => '16'],
  ['id' => '309','descr' => 'مريم','in_juz' => '16'],
  ['id' => '310','descr' => 'مريم','in_juz' => '16'],
  ['id' => '311','descr' => 'مريم','in_juz' => '16'],
  ['id' => '312','descr' => 'مريم وبداية سورة طه','in_juz' => '16'],
  ['id' => '313','descr' => 'طه','in_juz' => '16'],
  ['id' => '314','descr' => 'طه','in_juz' => '16'],
  ['id' => '315','descr' => 'طه','in_juz' => '16'],
  ['id' => '316','descr' => 'طه','in_juz' => '16'],
  ['id' => '317','descr' => 'طه','in_juz' => '16'],
  ['id' => '318','descr' => 'طه','in_juz' => '16'],
  ['id' => '319','descr' => 'طه','in_juz' => '16'],
  ['id' => '320','descr' => 'طه','in_juz' => '16'],
  ['id' => '321','descr' => 'طه','in_juz' => '16'],
  ['id' => '322','descr' => 'الأنبياء','in_juz' => '17'],
  ['id' => '323','descr' => 'الأنبياء','in_juz' => '17'],
  ['id' => '324','descr' => 'الأنبياء','in_juz' => '17'],
  ['id' => '325','descr' => 'الأنبياء','in_juz' => '17'],
  ['id' => '326','descr' => 'الأنبياء','in_juz' => '17'],
  ['id' => '327','descr' => 'الأنبياء','in_juz' => '17'],
  ['id' => '328','descr' => 'الأنبياء','in_juz' => '17'],
  ['id' => '329','descr' => 'الأنبياء','in_juz' => '17'],
  ['id' => '330','descr' => 'الأنبياء','in_juz' => '17'],
  ['id' => '331','descr' => 'الأنبياء','in_juz' => '17'],
  ['id' => '332','descr' => 'الحج','in_juz' => '17'],
  ['id' => '333','descr' => 'الحج','in_juz' => '17'],
  ['id' => '334','descr' => 'الحج','in_juz' => '17'],
  ['id' => '335','descr' => 'الحج','in_juz' => '17'],
  ['id' => '336','descr' => 'الحج','in_juz' => '17'],
  ['id' => '337','descr' => 'الحج','in_juz' => '17'],
  ['id' => '338','descr' => 'الحج','in_juz' => '17'],
  ['id' => '339','descr' => 'الحج','in_juz' => '17'],
  ['id' => '340','descr' => 'الحج','in_juz' => '17'],
  ['id' => '341','descr' => 'الحج','in_juz' => '17'],
  ['id' => '342','descr' => 'المؤمنون','in_juz' => '18'],
  ['id' => '343','descr' => 'المؤمنون','in_juz' => '18'],
  ['id' => '344','descr' => 'المؤمنون','in_juz' => '18'],
  ['id' => '345','descr' => 'المؤمنون','in_juz' => '18'],
  ['id' => '346','descr' => 'المؤمنون','in_juz' => '18'],
  ['id' => '347','descr' => 'المؤمنون','in_juz' => '18'],
  ['id' => '348','descr' => 'المؤمنون','in_juz' => '18'],
  ['id' => '349','descr' => 'المؤمنون','in_juz' => '18'],
  ['id' => '350','descr' => 'النور','in_juz' => '18'],
  ['id' => '351','descr' => 'النور','in_juz' => '18'],
  ['id' => '352','descr' => 'النور','in_juz' => '18'],
  ['id' => '353','descr' => 'النور','in_juz' => '18'],
  ['id' => '354','descr' => 'النور','in_juz' => '18'],
  ['id' => '355','descr' => 'النور','in_juz' => '18'],
  ['id' => '356','descr' => 'النور','in_juz' => '18'],
  ['id' => '357','descr' => 'النور','in_juz' => '18'],
  ['id' => '358','descr' => 'النور','in_juz' => '18'],
  ['id' => '359','descr' => 'النور وبداية سورة الفرقان','in_juz' => '18'],
  ['id' => '360','descr' => 'الفرقان','in_juz' => '18'],
  ['id' => '361','descr' => 'الفرقان','in_juz' => '18'],
  ['id' => '362','descr' => 'الفرقان','in_juz' => '19'],
  ['id' => '363','descr' => 'الفرقان','in_juz' => '19'],
  ['id' => '364','descr' => 'الفرقان','in_juz' => '19'],
  ['id' => '365','descr' => 'الفرقان','in_juz' => '19'],
  ['id' => '366','descr' => 'الفرقان','in_juz' => '19'],
  ['id' => '367','descr' => 'الشعراء','in_juz' => '19'],
  ['id' => '368','descr' => 'الشعراء','in_juz' => '19'],
  ['id' => '369','descr' => 'الشعراء','in_juz' => '19'],
  ['id' => '370','descr' => 'الشعراء','in_juz' => '19'],
  ['id' => '371','descr' => 'الشعراء','in_juz' => '19'],
  ['id' => '372','descr' => 'الشعراء','in_juz' => '19'],
  ['id' => '373','descr' => 'الشعراء','in_juz' => '19'],
  ['id' => '374','descr' => 'الشعراء','in_juz' => '19'],
  ['id' => '375','descr' => 'الشعراء','in_juz' => '19'],
  ['id' => '376','descr' => 'الشعراء','in_juz' => '19'],
  ['id' => '377','descr' => 'النمل','in_juz' => '19'],
  ['id' => '378','descr' => 'النمل','in_juz' => '19'],
  ['id' => '379','descr' => 'النمل','in_juz' => '19'],
  ['id' => '380','descr' => 'النمل','in_juz' => '19'],
  ['id' => '381','descr' => 'النمل','in_juz' => '19'],
  ['id' => '382','descr' => 'النمل','in_juz' => '20'],
  ['id' => '383','descr' => 'النمل','in_juz' => '20'],
  ['id' => '384','descr' => 'النمل','in_juz' => '20'],
  ['id' => '385','descr' => 'النمل وبداية سورة القصص','in_juz' => '20'],
  ['id' => '386','descr' => 'القصص','in_juz' => '20'],
  ['id' => '387','descr' => 'القصص','in_juz' => '20'],
  ['id' => '388','descr' => 'القصص','in_juz' => '20'],
  ['id' => '389','descr' => 'القصص','in_juz' => '20'],
  ['id' => '390','descr' => 'القصص','in_juz' => '20'],
  ['id' => '391','descr' => 'القصص','in_juz' => '20'],
  ['id' => '392','descr' => 'القصص','in_juz' => '20'],
  ['id' => '393','descr' => 'القصص','in_juz' => '20'],
  ['id' => '394','descr' => 'القصص','in_juz' => '20'],
  ['id' => '395','descr' => 'القصص','in_juz' => '20'],
  ['id' => '396','descr' => 'القصص وبداية سورة العنكبوت','in_juz' => '20'],
  ['id' => '397','descr' => 'العنكبوت','in_juz' => '20'],
  ['id' => '398','descr' => 'العنكبوت','in_juz' => '20'],
  ['id' => '399','descr' => 'العنكبوت','in_juz' => '20'],
  ['id' => '400','descr' => 'العنكبوت','in_juz' => '20'],
  ['id' => '401','descr' => 'العنكبوت','in_juz' => '20'],
  ['id' => '402','descr' => 'العنكبوت','in_juz' => '21'],
  ['id' => '403','descr' => 'العنكبوت','in_juz' => '21'],
  ['id' => '404','descr' => 'العنكبوت وبداية سورة الروم','in_juz' => '21'],
  ['id' => '405','descr' => 'الروم','in_juz' => '21'],
  ['id' => '406','descr' => 'الروم','in_juz' => '21'],
  ['id' => '407','descr' => 'الروم','in_juz' => '21'],
  ['id' => '408','descr' => 'الروم','in_juz' => '21'],
  ['id' => '409','descr' => 'الروم','in_juz' => '21'],
  ['id' => '410','descr' => 'الروم','in_juz' => '21'],
  ['id' => '411','descr' => 'لقمان','in_juz' => '21'],
  ['id' => '412','descr' => 'لقمان','in_juz' => '21'],
  ['id' => '413','descr' => 'لقمان','in_juz' => '21'],
  ['id' => '414','descr' => 'لقمان','in_juz' => '21'],
  ['id' => '415','descr' => 'السجدة','in_juz' => '21'],
  ['id' => '416','descr' => 'السجدة','in_juz' => '21'],
  ['id' => '417','descr' => 'السجدة','in_juz' => '21'],
  ['id' => '418','descr' => 'الأحزاب','in_juz' => '21'],
  ['id' => '419','descr' => 'الأحزاب','in_juz' => '21'],
  ['id' => '420','descr' => 'الأحزاب','in_juz' => '21'],
  ['id' => '421','descr' => 'الأحزاب','in_juz' => '21'],
  ['id' => '422','descr' => 'الأحزاب','in_juz' => '22'],
  ['id' => '423','descr' => 'الأحزاب','in_juz' => '22'],
  ['id' => '424','descr' => 'الأحزاب','in_juz' => '22'],
  ['id' => '425','descr' => 'الأحزاب','in_juz' => '22'],
  ['id' => '426','descr' => 'الأحزاب','in_juz' => '22'],
  ['id' => '427','descr' => 'الأحزاب','in_juz' => '22'],
  ['id' => '428','descr' => 'سبأ','in_juz' => '22'],
  ['id' => '429','descr' => 'سبأ','in_juz' => '22'],
  ['id' => '430','descr' => 'سبأ','in_juz' => '22'],
  ['id' => '431','descr' => 'سبأ','in_juz' => '22'],
  ['id' => '432','descr' => 'سبأ','in_juz' => '22'],
  ['id' => '433','descr' => 'سبأ','in_juz' => '22'],
  ['id' => '434','descr' => 'سبأ وبداية سورة فاطر','in_juz' => '22'],
  ['id' => '435','descr' => 'فاطر','in_juz' => '22'],
  ['id' => '436','descr' => 'فاطر','in_juz' => '22'],
  ['id' => '437','descr' => 'فاطر','in_juz' => '22'],
  ['id' => '438','descr' => 'فاطر','in_juz' => '22'],
  ['id' => '439','descr' => 'فاطر','in_juz' => '22'],
  ['id' => '440','descr' => 'فاطر وبداية سورة يس','in_juz' => '22'],
  ['id' => '441','descr' => 'يس','in_juz' => '22'],
  ['id' => '442','descr' => 'يس','in_juz' => '23'],
  ['id' => '443','descr' => 'يس','in_juz' => '23'],
  ['id' => '444','descr' => 'يس','in_juz' => '23'],
  ['id' => '445','descr' => 'يس','in_juz' => '23'],
  ['id' => '446','descr' => 'الصافات','in_juz' => '23'],
  ['id' => '447','descr' => 'الصافات','in_juz' => '23'],
  ['id' => '448','descr' => 'الصافات','in_juz' => '23'],
  ['id' => '449','descr' => 'الصافات','in_juz' => '23'],
  ['id' => '450','descr' => 'الصافات','in_juz' => '23'],
  ['id' => '451','descr' => 'الصافات','in_juz' => '23'],
  ['id' => '452','descr' => 'الصافات','in_juz' => '23'],
  ['id' => '453','descr' => 'ص','in_juz' => '23'],
  ['id' => '454','descr' => 'ص','in_juz' => '23'],
  ['id' => '455','descr' => 'ص','in_juz' => '23'],
  ['id' => '456','descr' => 'ص','in_juz' => '23'],
  ['id' => '457','descr' => 'ص','in_juz' => '23'],
  ['id' => '458','descr' => 'ص وبداية سورة الزمر','in_juz' => '23'],
  ['id' => '459','descr' => 'الزمر','in_juz' => '23'],
  ['id' => '460','descr' => 'الزمر','in_juz' => '23'],
  ['id' => '461','descr' => 'الزمر','in_juz' => '23'],
  ['id' => '462','descr' => 'الزمر','in_juz' => '24'],
  ['id' => '463','descr' => 'الزمر','in_juz' => '24'],
  ['id' => '464','descr' => 'الزمر','in_juz' => '24'],
  ['id' => '465','descr' => 'الزمر','in_juz' => '24'],
  ['id' => '466','descr' => 'الزمر','in_juz' => '24'],
  ['id' => '467','descr' => 'الزمر وبداية سورة غافر','in_juz' => '24'],
  ['id' => '468','descr' => 'غافر','in_juz' => '24'],
  ['id' => '469','descr' => 'غافر','in_juz' => '24'],
  ['id' => '470','descr' => 'غافر','in_juz' => '24'],
  ['id' => '471','descr' => 'غافر','in_juz' => '24'],
  ['id' => '472','descr' => 'غافر','in_juz' => '24'],
  ['id' => '473','descr' => 'غافر','in_juz' => '24'],
  ['id' => '474','descr' => 'غافر','in_juz' => '24'],
  ['id' => '475','descr' => 'غافر','in_juz' => '24'],
  ['id' => '476','descr' => 'غافر','in_juz' => '24'],
  ['id' => '477','descr' => 'فصلت','in_juz' => '24'],
  ['id' => '478','descr' => 'فصلت','in_juz' => '24'],
  ['id' => '479','descr' => 'فصلت','in_juz' => '24'],
  ['id' => '480','descr' => 'فصلت','in_juz' => '24'],
  ['id' => '481','descr' => 'فصلت','in_juz' => '24'],
  ['id' => '482','descr' => 'فصلت','in_juz' => '25'],
  ['id' => '483','descr' => 'الشورى','in_juz' => '25'],
  ['id' => '484','descr' => 'الشورى','in_juz' => '25'],
  ['id' => '485','descr' => 'الشورى','in_juz' => '25'],
  ['id' => '486','descr' => 'الشورى','in_juz' => '25'],
  ['id' => '487','descr' => 'الشورى','in_juz' => '25'],
  ['id' => '488','descr' => 'الشورى','in_juz' => '25'],
  ['id' => '489','descr' => 'الشورى وبداية سورة الزخرف','in_juz' => '25'],
  ['id' => '490','descr' => 'الزخرف','in_juz' => '25'],
  ['id' => '491','descr' => 'الزخرف','in_juz' => '25'],
  ['id' => '492','descr' => 'الزخرف','in_juz' => '25'],
  ['id' => '493','descr' => 'الزخرف','in_juz' => '25'],
  ['id' => '494','descr' => 'الزخرف','in_juz' => '25'],
  ['id' => '495','descr' => 'الزخرف','in_juz' => '25'],
  ['id' => '496','descr' => 'الدخان','in_juz' => '25'],
  ['id' => '497','descr' => 'الدخان','in_juz' => '25'],
  ['id' => '498','descr' => 'الدخان','in_juz' => '25'],
  ['id' => '499','descr' => 'الجاثية','in_juz' => '25'],
  ['id' => '500','descr' => 'الجاثية','in_juz' => '25'],
  ['id' => '501','descr' => 'الجاثية','in_juz' => '25'],
  ['id' => '502','descr' => 'الجاثية وبداية سورة الأحقاف','in_juz' => '26'],
  ['id' => '503','descr' => 'الأحقاف','in_juz' => '26'],
  ['id' => '504','descr' => 'الأحقاف','in_juz' => '26'],
  ['id' => '505','descr' => 'الأحقاف','in_juz' => '26'],
  ['id' => '506','descr' => 'الأحقاف','in_juz' => '26'],
  ['id' => '507','descr' => 'محمد','in_juz' => '26'],
  ['id' => '508','descr' => 'محمد','in_juz' => '26'],
  ['id' => '509','descr' => 'محمد','in_juz' => '26'],
  ['id' => '510','descr' => 'محمد','in_juz' => '26'],
  ['id' => '511','descr' => 'الفتح','in_juz' => '26'],
  ['id' => '512','descr' => 'الفتح','in_juz' => '26'],
  ['id' => '513','descr' => 'الفتح','in_juz' => '26'],
  ['id' => '514','descr' => 'الفتح','in_juz' => '26'],
  ['id' => '515','descr' => 'الفتح وبداية سورة الحجرات','in_juz' => '26'],
  ['id' => '516','descr' => 'الحجرات','in_juz' => '26'],
  ['id' => '517','descr' => 'الحجرات','in_juz' => '26'],
  ['id' => '518','descr' => 'ق','in_juz' => '26'],
  ['id' => '519','descr' => 'ق','in_juz' => '26'],
  ['id' => '520','descr' => 'ق وبداية سورة الذاريات','in_juz' => '26'],
  ['id' => '521','descr' => 'الذاريات','in_juz' => '26'],
  ['id' => '522','descr' => 'الذاريات','in_juz' => '27'],
  ['id' => '523','descr' => 'الذاريات وبداية سورة الطور','in_juz' => '27'],
  ['id' => '524','descr' => 'الطور','in_juz' => '27'],
  ['id' => '525','descr' => 'الطور','in_juz' => '27'],
  ['id' => '526','descr' => 'النجم','in_juz' => '27'],
  ['id' => '527','descr' => 'النجم','in_juz' => '27'],
  ['id' => '528','descr' => 'النجم وبداية سورة القمر','in_juz' => '27'],
  ['id' => '529','descr' => 'القمر','in_juz' => '27'],
  ['id' => '530','descr' => 'القمر','in_juz' => '27'],
  ['id' => '531','descr' => 'القمر وبداية سورة الرحمان','in_juz' => '27'],
  ['id' => '532','descr' => 'الرحمان','in_juz' => '27'],
  ['id' => '533','descr' => 'الرحمان','in_juz' => '27'],
  ['id' => '534','descr' => 'الرحمان وبداية سورة الواقعة','in_juz' => '27'],
  ['id' => '535','descr' => 'الواقعة','in_juz' => '27'],
  ['id' => '536','descr' => 'الواقعة','in_juz' => '27'],
  ['id' => '537','descr' => 'الواقعة وبداية سورة الحديد','in_juz' => '27'],
  ['id' => '538','descr' => 'الحديد','in_juz' => '27'],
  ['id' => '539','descr' => 'الحديد','in_juz' => '27'],
  ['id' => '540','descr' => 'الحديد','in_juz' => '27'],
  ['id' => '541','descr' => 'الحديد','in_juz' => '27'],
  ['id' => '542','descr' => 'المجادلة','in_juz' => '28'],
  ['id' => '543','descr' => 'المجادلة','in_juz' => '28'],
  ['id' => '544','descr' => 'المجادلة','in_juz' => '28'],
  ['id' => '545','descr' => 'المجادلة وبداية سورة الحشر','in_juz' => '28'],
  ['id' => '546','descr' => 'الحشر','in_juz' => '28'],
  ['id' => '547','descr' => 'الحشر','in_juz' => '28'],
  ['id' => '548','descr' => 'الحشر','in_juz' => '28'],
  ['id' => '549','descr' => 'الممتحنة','in_juz' => '28'],
  ['id' => '550','descr' => 'الممتحنة','in_juz' => '28'],
  ['id' => '551','descr' => 'الممتحنة وبداية سورة الصف','in_juz' => '28'],
  ['id' => '552','descr' => 'الصف','in_juz' => '28'],
  ['id' => '553','descr' => 'الجمعة','in_juz' => '28'],
  ['id' => '554','descr' => 'الجمعة وبداية سورة المنافقون','in_juz' => '28'],
  ['id' => '555','descr' => 'المنافقون','in_juz' => '28'],
  ['id' => '556','descr' => 'التغابن','in_juz' => '28'],
  ['id' => '557','descr' => 'التغابن','in_juz' => '28'],
  ['id' => '558','descr' => 'الطلاق','in_juz' => '28'],
  ['id' => '559','descr' => 'الطلاق','in_juz' => '28'],
  ['id' => '560','descr' => 'التحريم','in_juz' => '28'],
  ['id' => '561','descr' => 'التحريم','in_juz' => '28'],
  ['id' => '562','descr' => 'الملك','in_juz' => '29'],
  ['id' => '563','descr' => 'الملك','in_juz' => '29'],
  ['id' => '564','descr' => 'الملك وبداية سورة القلم','in_juz' => '29'],
  ['id' => '565','descr' => 'القلم','in_juz' => '29'],
  ['id' => '566','descr' => 'القلم وبداية سورة الحاقة','in_juz' => '29'],
  ['id' => '567','descr' => 'الحاقة','in_juz' => '29'],
  ['id' => '568','descr' => 'الحاقة وبداية سورة المعارج','in_juz' => '29'],
  ['id' => '569','descr' => 'المعارج','in_juz' => '29'],
  ['id' => '570','descr' => 'المعارج وبداية سورة نوح','in_juz' => '29'],
  ['id' => '571','descr' => 'نوح','in_juz' => '29'],
  ['id' => '572','descr' => 'الجن','in_juz' => '29'],
  ['id' => '573','descr' => 'الجن','in_juz' => '29'],
  ['id' => '574','descr' => 'المزمل','in_juz' => '29'],
  ['id' => '575','descr' => 'المزمل وبداية سورة المدثر','in_juz' => '29'],
  ['id' => '576','descr' => 'المدثر','in_juz' => '29'],
  ['id' => '577','descr' => 'المدثر وبداية سورة القيامة','in_juz' => '29'],
  ['id' => '578','descr' => 'القيامة وبداية سورة الإنسان','in_juz' => '29'],
  ['id' => '579','descr' => 'الإنسان','in_juz' => '29'],
  ['id' => '580','descr' => 'الإنسان وبداية سورة المرسلات','in_juz' => '29'],
  ['id' => '581','descr' => 'المرسلات','in_juz' => '29'],
  ['id' => '582','descr' => 'النبإ','in_juz' => '30'],
  ['id' => '583','descr' => 'النبإ وبداية سورة النازعات','in_juz' => '30'],
  ['id' => '584','descr' => 'النازعات','in_juz' => '30'],
  ['id' => '585','descr' => 'عبس','in_juz' => '30'],
  ['id' => '586','descr' => 'التكوير','in_juz' => '30'],
  ['id' => '587','descr' => 'الانفطار وسورة المطففين','in_juz' => '30'],
  ['id' => '588','descr' => 'المطففين','in_juz' => '30'],
  ['id' => '589','descr' => 'المطففين وبداية سورة الانشقاق','in_juz' => '30'],
  ['id' => '590','descr' => 'البروج','in_juz' => '30'],
  ['id' => '591','descr' => 'الطارق وسورة الأعلى','in_juz' => '30'],
  ['id' => '592','descr' => 'الأعلى وسورة الغاشية','in_juz' => '30'],
  ['id' => '593','descr' => 'الفجر','in_juz' => '30'],
  ['id' => '594','descr' => 'الفجر وسورة البلد','in_juz' => '30'],
  ['id' => '595','descr' => 'الشمس وسورة الليل','in_juz' => '30'],
  ['id' => '596','descr' => 'الليل وسورة الضحى وسورة الشرح','in_juz' => '30'],
  ['id' => '597','descr' => 'التين وسورة العلق','in_juz' => '30'],
  ['id' => '598','descr' => 'القدر وسورة البينة','in_juz' => '30'],
  ['id' => '599','descr' => 'البينة وسورة الزلزلة وسورة العاديات','in_juz' => '30'],
  ['id' => '600','descr' => 'العاديات وسورة القارعة وسورة التكاثر','in_juz' => '30'],
  ['id' => '601','descr' => 'العصر وسورة الهمزة وسورة الفيل','in_juz' => '30'],
  ['id' => '602','descr' => 'قريش وسورة الماعون وسورة الكوثر','in_juz' => '30'],
  ['id' => '603','descr' => 'الكافرون وسورة النصر وسورة المسد','in_juz' => '30'],
  ['id' => '604','descr' => 'الإخلاص وسورة الفلق وسورة الناس','in_juz' => '30']
];
        foreach($pages as $page){
			Page::create(['descr'=>$page['descr'],'in_juz'=>$page['in_juz']]);
		}
    }
}