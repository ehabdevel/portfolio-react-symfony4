<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="index")
     */
    public function indexAction()
    {
        return $this->render('Default/index.html.twig', []);
    }

    /**
     * @Route("/data", name="data")
     */
    public function dataAction()
    {
        return new JsonResponse([
            [
                'id' => 1,
                'author' => 'Rohanou Hotel',
                'avatarUrl' => 'img/rohanou.webp',
                'title' => 'rohanou.com',
                'subtitle' => 'Active',
                'description' => 'Rohanou Resort hotel located on the south of Quseir - Marsa Alam High Way, Red Sea, Egypt.',
            ],
            [
                'id' => 2,
                'author' => 'Chamber of Commerce',
                'avatarUrl' => 'img/cocredc.webp',
                'title' => 'coc-redsea.org',
                'subtitle' => 'Active',
                'description' => "The Chamber of Commerce Hurghada, Red Sea, Egypt.",
            ],
            [
                'id' => 3,
                'author' => 'Twins Diving',
                'avatarUrl' => 'img/twinsdiving.webp',
                'title' => 'twins-diving.com',
                'subtitle' => 'Closed',
                'description' => "Twins Diving Center at Soam bay, Red Sea, Egypt.",
            ],
            [
                'id' => 4,
                'author' => 'Yassmina Tours',
                'title' => 'yassminatours.com',
                'avatarUrl' => 'img/yassmina.webp',
                'subtitle' => 'closed',
                'services' => 'Host - Develope - Design',
                'description' => 'Yassmina Tours Company - Tourism Company in Hurghada',
            ],
            [
                'id' => 5,
                'author' => 'Makka Shipping',
                'title' => 'makkashipping.com',
                'avatarUrl' => 'img/makkashipping.webp',
                'subtitle' => 'closed',
                'services' => 'Host - Develope - Design',
                'description' => 'Makka Shipping Company - Shipping Company in Hurghada',
            ],
            [
                'id' => 6,
                'author' => 'Ice Princess',
                'title' => 'iceprincess-redsea.com',
                'avatarUrl' => 'img/iceprincess.webp',
                'subtitle' => 'closed',
                'services' => 'Host - Develope - Design',
                'description' => 'Ice Princess Diving Boat Hurghada',
            ],
            [
                'id' => 7,
                'author' => 'E-Reading Skills',
                'title' => 'e-readingskills.com',
                'avatarUrl' => 'img/ereading.webp',
                'subtitle' => 'closed',
                'services' => 'Host - Develope - Design',
                'description' => 'E-Reading Skills was for a student preparing her MBA, South Valley University, Hurghada Branch (Education)',
            ],
            [
                'id' => 10,
                'author' => 'Hurghada Journal',
                'title' => 'hurghadajournal.com',
                'avatarUrl' => 'img/hurghadajournal.webp',
                'subtitle' => 'closed',
                'services' => 'Host - Develope - Design',
                'description' => 'Hurghada Journal and city community',
            ],
            [
                'id' => 11,
                'author' => 'Al-Madyh',
                'title' => 'almadyh.com',
                'avatarUrl' => 'img/almadyh.webp',
                'subtitle' => 'closed',
                'services' => 'Host - Develope - Design',
                'description' => 'A religion website for a famous Imam',
            ],
            [
                'id' => 12,
                'author' => 'Smart Stationry',
                'title' => 'smartstationry.com',
                'avatarUrl' => 'img/smart.webp',
                'subtitle' => 'closed',
                'services' => 'Host - Develope - Design',
                'description' => 'Smart Stationry book shop',
            ],
            [
                'id' => 13,
                'author' => 'Smart Shop-eg',
                'title' => 'smartshop-eg.com',
                'avatarUrl' => 'img/smart.webp',
                'subtitle' => 'closed',
                'services' => 'Host - Develope - Design',
                'description' => 'Smart Shop-eg book shop',
            ],
            [
                'id' => 14,
                'author' => 'Eshtta Dancing',
                'title' => 'eshttadancing.com',
                'avatarUrl' => 'img/eshtta.webp',
                'subtitle' => 'closed',
                'services' => 'Host - Develope - Design',
                'description' => 'Eshtta Dancing is a tourism bazaar shop',
            ],
            [
                'id' => 15,
                'author' => 'Wakawaka Safari',
                'title' => 'wakawaka-safari.com',
                'avatarUrl' => 'img/wakawaka.webp',
                'subtitle' => 'closed',
                'services' => 'Host - Develope - Design',
                'description' => 'Wakawaka Safari and tourism Company',
            ],
            [
                'id' => 16,
                'author' => 'Hurghada News',
                'title' => 'hurghadanews.com',
                'avatarUrl' => 'img/hurghadanews.webp',
                'subtitle' => 'active',
                'services' => 'Host - Develope - Design',
                'description' => 'Hurghada News',
            ],
            [
                'id' => 17,
                'author' => 'At-tayyib',
                'title' => 'at-tayyib.com',
                'avatarUrl' => 'img/attayyib.webp',
                'subtitle' => 'closed',
                'services' => 'Host - Develope - Design',
                'description' => 'At-tayyib website for books and translations (Education)',
            ],
            [
                'id' => 18,
                'author' => 'School Radio',
                'title' => 'sis-radio.com',
                'avatarUrl' => 'img/sunriseradio.webp',
                'subtitle' => 'closed',
                'services' => 'Host - Develope - Design',
                'description' => 'A School Radio',
            ],
            [
                'id' => 21,
                'author' => 'E-Mind Mapping Reading Comprehension',
                'title' => 'emmrc.org',
                'avatarUrl' => 'img/emmrc.webp',
                'subtitle' => 'closed',
                'services' => 'Host - Develope - Design',
                'description' => 'A university doctor preparing for a doctorate, South Valley University, Hurghada Branch (Education)',
            ],
            [
                'id' => 22,
                'author' => 'Elmasrya Track',
                'title' => 'elmasrya-track.com',
                'avatarUrl' => 'img/elmasrya-track.webp',
                'subtitle' => 'closed',
                'services' => 'Host - Develope - Design',
                'description' => 'Elmasrya Track Marine Company',
            ],
            [
                'id' => 23,
                'author' => 'Geant Training',
                'title' => 'geant-training.com',
                'avatarUrl' => 'img/geant.webp',
                'subtitle' => 'closed',
                'services' => 'Host - Develope - Design',
                'description' => 'Geant Training Center (Education)',
            ],
            [
                'id' => 24,
                'author' => 'Porto Travel Service',
                'title' => 'portotravel-service.com',
                'avatarUrl' => 'img/portotravel-service.webp',
                'subtitle' => 'closed',
                'services' => 'Host - Develope - Design',
                'description' => 'Porto Travel Service, tourism and transportation Company',
            ],
            [
                'id' => 25,
                'author' => 'A2Z Marine',
                'title' => 'a2z-marine.com',
                'avatarUrl' => 'img/a2zmarine.webp',
                'subtitle' => 'closed',
                'services' => 'Host - Develope - Design',
                'description' => 'A2Z Marine Marine Company',
            ],
            [
                'id' => 19,
                'author' => 'Truth As Seen',
                'title' => 'truthasseen.com',
                'avatarUrl' => 'img/nolonger.webp',
                'subtitle' => 'closed',
                'services' => 'Host - Develope - Design',
                'description' => 'Truth as seen, association.',
            ],
            [
                'id' => 20,
                'author' => 'Expats In Egypt Movement',
                'title' => 'expatsinegyptmovement.org',
                'avatarUrl' => 'img/nolonger.webp',
                'subtitle' => 'closed',
                'services' => 'Host - Develope - Design',
                'description' => 'Expats In Egypt Movement, association.',
            ],
            [
                'id' => 8,
                'author' => 'MAS Globe',
                'title' => 'masglobe.com',
                'avatarUrl' => 'img/nolonger.webp',
                'subtitle' => 'closed',
                'services' => 'Host - Develope - Design',
                'description' => 'MAS Globe trading Company Hurghada',
            ],
            [
                'id' => 9,
                'author' => 'IT Red Sea',
                'title' => 'itredsea.net',
                'avatarUrl' => 'img/nolonger.webp',
                'subtitle' => 'closed',
                'services' => 'Host - Develope - Design',
                'description' => 'itredsea.net for computer parts sales',
            ],
            [
                'id' => 26,
                'author' => 'Sea Holidays',
                'title' => 'seaholidays.de',
                'avatarUrl' => 'img/nolonger.webp',
                'subtitle' => 'closed',
                'services' => 'Host - Develope - Design',
                'description' => 'Sea Holidays tourism Company',
            ],
            [
                'id' => 27,
                'author' => 'Hurghada Bulletin',
                'title' => 'hurghadabulletin.com',
                'avatarUrl' => 'img/nolonger.webp',
                'subtitle' => 'closed',
                'services' => 'Host - Develope - Design',
                'description' => 'Hurghada Bulletin and city community',
            ],
            [
                'id' => 28,
                'author' => 'Akhty',
                'title' => 'akhty.com',
                'avatarUrl' => 'img/nolonger.webp',
                'subtitle' => 'closed',
                'services' => 'Host - Develope - Design',
                'description' => 'Akhty for web hosting',
            ]
        ]);
    }
}