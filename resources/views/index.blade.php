@extends('layouts.app')
@section('content')
    <style>
        body {
            background-color: #e2eff7;
        }

        * {
            box-sizing: border-box;
            list-style: none;
            scroll-behavior: smooth;
        }

        .Hero {
            position: relative;
            width: 100%;
            height: 90vh;
            background-image: url("{{ asset('images/bg.jpg') }}");
            background-position: center;
            background-size: cover;
            display: grid;
            grid-template-columns: repeat(1, 1fr);
            align-items: center;
        }
    </style>
    <section class="Hero text-center text-white mt-5">
    </section>
    <section id="About" class="py-3">
        <div class="container  py-5 mx-auto">
            <h3 class="text-center ">Our  Platform</h3>
            <hr width="20% " class="pb-2">
            <p class="fs-1" style="font-size: 12pt; text-align: justify;">
                The project, "A Comprehensive Tourist Guide to the Jazan Region," aims to create an innovative platform that caters to domestic tourism in Saudi Arabia. This initiative seeks to provide an in-depth exploration of the Jazan region, offering valuable information about its tourist attractions, renowned cuisine, local agricultural products, guidance offices, and vibrant events and festivals. The project takes pride in delivering an exceptional tourist information service through an elegantly designed interface, enhanced by the use of the Bootstrap framework and captivating animations, ensuring an engaging and informative experience for visitors. Developed in the PHP programming language and supported by the MySQL database, this platform is dedicated to unveiling the hidden gems and cultural richness of the Jazan region. The user interface is meticulously crafted using HTML and CSS, in combination with the versatile Bootstrap framework, creating an aesthetically pleasing and user-friendly design. The project's primary goal is to enthrall site visitors, enticing them to explore the vast array of services and discover the enchanting beauty of the Jazan region. In summary, "A Comprehensive Tourist Guide to the Jazan Region" serves as a digital gateway to one of Saudi Arabia's most captivating destinations. By seamlessly integrating technology, design, and cultural exploration, this project is poised to promote domestic tourism, support local businesses, and foster a deeper appreciation for the cultural diversity and natural wonders that the Jazan region has to offer.

            </p>
        </div>
    </section>
   
@endsection
