<?php

namespace Calendar\Controller;

use Calendar\Model\LeapYear;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class LeapYearController
{
    public function index(Request $request, $year)
    {
        $leapYear = new LeapYear();
        if ($leapYear->isLeapYear($year)) {
            $response = new Response('Yep, this is a leap year! '.rand());
        } else {
            $response = new Response('Nope, this is not a leap year.');
        }

        $response->setCache([
            'must_revalidate'  => false,
            'no_cache'         => false,
            'no_store'         => false,
            'no_transform'     => false,
            'public'           => true,
            'private'          => false,
            'proxy_revalidate' => false,
            'max_age'          => 600,
            's_maxage'         => 600,
            'immutable'        => true,
            'last_modified'    => new \DateTime(),
            'etag'             => 'abcdef'
        ]);

//        $response->setTtl(10);

//        $response->setETag('Yep,');
//
//        if ($response->isNotModified($request)) {
//            return $response;
//        }
//
//        $response->setContent('The computed content of the response');

        return $response;
    }
}