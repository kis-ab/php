<?php
include "../src/TariffInterface.php";
include "../src/ServiceInterface.php";
include "../src/TariffAbstract.php";
include "../src/TariffBasic.php";
include "../src/ServiceGPS.php";
include "../src/ServiceDriver.php";
include "../src/TariffHour.php";
include "../src/TariffStudent.php";

/** @var TariffInterface $tariff */
//echo 'Цена в руб. за 5 км и 60 мин с дополнительной услугой GPS - тариф базовый: ';
//$tariff = new TariffBasic(5, 60);
//$tariff->addService(new ServiceGPS(15));

//echo 'Цена в руб. 60 мин с дополнительным водителем - тариф почасовой: ';
//$tariff = new TariffHour(1, 59);
//$tariff->addService(new ServiceDriver(100));

echo 'Цена в руб. за 1 км и 30 мин - тариф студенческий: ';
$tariff = new TariffStudent(1, 30);
echo $tariff->countPrice();