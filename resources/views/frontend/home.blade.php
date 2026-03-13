@extends('layouts.app')

@section('content')

    {{-- ================= HERO SECTION ================= --}}
    @push('head')
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
        <link href="https://fonts.googleapis.com/css2?family=Fredoka:wght@300..700&family=Outfit:wght@100..900&display=swap" rel="stylesheet">
        <style>
            :root {
                --primary-teal: #006684;
                --secondary-orange: #e99e5a;
                --text-dark: #1a1a1a;
                --soft-bg: #f8fafc;
            }

            body {
                font-family: 'Outfit', sans-serif;
            }

            .hero-section {
                background-color: #ffffff;
                overflow: hidden;
                position: relative;
            }

            .hero-bg-doodles {
                position: absolute;
                inset: 0;
                opacity: 0.05;
                pointer-events: none;
                z-index: 1;
                background-image: url("data:image/svg+xml,%3Csvg width='400' height='400' viewBox='0 0 400 400' xmlns='http://www.w3.org/2000/svg'%3E%3Cg fill='none' stroke='%2332A8B8' stroke-width='1.5' stroke-linecap='round' stroke-linejoin='round'%3E%3Cpath d='M50 50 Q 70 30 90 50 T 130 50'/%3E%3Ccircle cx='300' cy='100' r='15'/%3E%3Cpath d='M350 300 l 15 15 m -15 0 l 15 -15'/%3E%3Crect x='100' y='300' width='25' height='25' rx='5'/%3E%3Cpath d='M200 150 c 15 0 15 20 30 20 s 15 -20 30 -20'/%3E%3Ccircle cx='50' cy='350' r='5' fill='%2332A8B8'/%3E%3Cpath d='M300 50 l 20 0 m -10 -10 l 0 20'/%3E%3Cpath d='M150 100 q 10 -10 20 0 t 20 0'/%3E%3C/g%3E%3C/svg%3E");
                background-size: 300px;
            }

            /* CHILD FRIENDLY BACKGROUND ELEMENTS */

            /* 1️⃣ Outline Illustration Pattern */
            .hero-pattern-lightbulb {
                position: absolute;
                inset: 0;
                opacity: 0.04;
                pointer-events: none;
                z-index: 1;
                background-image: url("data:image/svg+xml,%3Csvg width='300' height='300' viewBox='0 0 300 300' xmlns='http://www.w3.org/2000/svg'%3E%3Cg fill='none' stroke='%2332A8B8' stroke-width='1.5'%3E%3Cpath d='M150 60c-20 0-35 15-35 35 0 15 10 25 15 30v15h40v-15c5-5 15-15 15-30 0-20-15-35-35-35z'/%3E%3Cline x1='140' y1='140' x2='160' y2='140'/%3E%3Cline x1='140' y1='145' x2='160' y2='145'/%3E%3C/g%3E%3C/svg%3E");
                background-size: 220px;
            }

            /* 2️⃣ Abstract Doodle Lines */
            .hero-doodle-lines {
                position: absolute;
                inset: 0;
                opacity: 0.06;
                pointer-events: none;
                z-index: 2;
                background-image: url("data:image/svg+xml,%3Csvg width='300' height='300' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M20 100 Q60 60 100 100 T180 100 T260 100' stroke='%23EA6F71' stroke-width='2' fill='none' stroke-dasharray='6 6'/%3E%3C/svg%3E");
                background-size: 250px;
            }

            /* 3️⃣ Soft Geometric Shapes */
            .hero-geo-shapes span {
                position: absolute;
                border-radius: 50%;
                opacity: 0.15;
                animation: floatShapes 8s infinite ease-in-out;
            }

            .hero-geo-shapes .circle1 {
                width: 120px;
                height: 120px;
                background: #32A8B8;
                top: 15%;
                left: 5%;
            }

            .hero-geo-shapes .circle2 {
                width: 80px;
                height: 80px;
                background: #EA6F71;
                bottom: 20%;
                left: 10%;
            }

            .hero-geo-shapes .circle3 {
                width: 60px;
                height: 60px;
                background: #97B41A;
                top: 25%;
                right: 12%;
            }

            .hero-geo-shapes .circle4 {
                width: 100px;
                height: 100px;
                background: #E99D1D;
                bottom: 10%;
                right: 8%;
            }

            /* 4️⃣ Large Gradient Blob */
            .hero-gradient-blob {
                position: absolute;
                width: 500px;
                height: 500px;
                top: -120px;
                right: -150px;
                background: radial-gradient(circle at center, rgba(50, 168, 184, 0.25), transparent 70%);
                border-radius: 50%;
                filter: blur(80px);
                z-index: 0;
            }

            /* floating animation */

            @keyframes floatShapes {

                0%,
                100% {
                    transform: translateY(0);
                }

                50% {
                    transform: translateY(-20px);
                }
            }

            .floating-decoration {
                position: absolute;
                pointer-events: none;
                z-index: 15;
                animation: floatAnim 6s infinite ease-in-out;
            }

            @keyframes floatAnim {

                0%,
                100% {
                    transform: translateY(0) rotate(0deg);
                }

                50% {
                    transform: translateY(-20px) rotate(5deg);
                }
            }

            .decoration-pencil {
                top: 15%;
                left: 5%;
                width: 80px;
                transform: rotate(-15deg);
            }

            .decoration-plane {
                bottom: 25%;
                right: 45%;
                width: 60px;
                animation-delay: -2s;
            }

            .decoration-dots {
                top: 40%;
                right: 10%;
                width: 100px;
                opacity: 0.2;
            }

            .accent-dot {
                position: absolute;
                border-radius: 50%;
                z-index: 10;
                animation: floatAnim 8s infinite ease-in-out;
            }

            .dot-teal {
                background: #32A8B8;
                width: 12px;
                height: 12px;
                top: 20%;
                left: 15%;
                animation-delay: -1s;
            }

            .dot-coral {
                background: #EA6F71;
                width: 15px;
                height: 15px;
                top: 70%;
                left: 10%;
                animation-delay: -3s;
            }

            .dot-lime {
                background: #97B41A;
                width: 10px;
                height: 10px;
                top: 15%;
                right: 20%;
                animation-delay: -5s;
            }

            .dot-orange {
                background: #E99D1D;
                width: 14px;
                height: 14px;
                top: 60%;
                right: 15%;
                animation-delay: -2s;
            }

            .sparkle {
                position: absolute;
                width: 15px;
                height: 15px;
                background: #FFD700;
                clip-path: polygon(50% 0%, 61% 35%, 98% 35%, 68% 57%, 79% 91%, 50% 70%, 21% 91%, 32% 57%, 2% 35%, 39% 35%);
                z-index: 10;
                animation: pulseSparkle 4s infinite ease-in-out;
            }

            @keyframes pulseSparkle {

                0%,
                100% {
                    transform: scale(1) rotate(0deg);
                    opacity: 0.8;
                }

                50% {
                    transform: scale(1.5) rotate(180deg);
                    opacity: 1;
                }
            }

            .hero-title {
                font-family: 'Fredoka', sans-serif;
                color: #32A8B8;
                font-weight: 700;
                line-height: 1.1;
            }

            .hero-description {
                font-family: 'Quicksand', sans-serif;
                font-weight: 500;
            }

            @media (max-width: 1023px) {
                .hero-section {
                    background: #ffffff;
                    padding: 0 !important;
                    min-height: 100vh;
                    position: relative;
                    overflow: hidden;
                }

                .hero-section .swiper-slide {
                    min-height: 100vh;
                    display: flex;
                    flex-direction: column;
                    justify-content: flex-start;
                    padding-top: 2rem;
                }

                .mobile-hero-image-container {
                    width: 80%;
                    max-width: 320px;
                    aspect-ratio: 1;
                    margin: 0 auto;
                    position: relative;
                    z-index: 5;
                }

                .mobile-organic-circle {
                    width: 100%;
                    height: 100%;
                    border-radius: 30% 70% 70% 30% / 30% 30% 70% 70%;
                    overflow: hidden;
                    box-shadow: 0 15px 35px rgba(0, 0, 0, 0.1);
                    border: 8px solid white;
                    position: relative;
                }

                .mobile-organic-circle img {
                    width: 100%;
                    height: 100%;
                    object-fit: cover;
                }

                /* Circular border pattern background */
                .mobile-hero-image-container::before {
                    content: '';
                    position: absolute;
                    inset: -15px;
                    border: 2px dashed #EA6F71;
                    border-radius: 40% 60% 60% 40% / 40% 40% 60% 60%;
                    opacity: 0.3;
                    animation: rotate 20s linear infinite;
                }

                @keyframes rotate {
                    from {
                        transform: rotate(0deg);
                    }

                    to {
                        transform: rotate(360deg);
                    }
                }

                .mobile-content-card {
                    padding: 2.5rem 1.5rem;
                    text-align: left;
                    width: 100%;
                    background: white;
                    margin-top: 2rem;
                    border-radius: 24px;
                    position: relative;
                    z-index: 10;
                }

                .mobile-subheading {
                    font-family: 'Quicksand', sans-serif;
                    color: #EA6F71;
                    font-weight: 700;
                    font-size: 1.25rem;
                    margin-bottom: 0.5rem;
                    display: block;
                }

                .hero-title {
                    font-family: 'Fredoka', sans-serif;
                    font-size: 2.5rem !important;
                    line-height: 1.2;
                    color: #1a365d !important;
                    font-weight: 700;
                    margin-bottom: 1.5rem;
                }

                .hero-description {
                    font-family: 'Quicksand', sans-serif;
                    font-size: 1rem !important;
                    color: #4a5568 !important;
                    line-height: 1.6;
                    margin-bottom: 2rem;
                }

            }

            .btn-orange {
                font-family: 'Fredoka', sans-serif;
                background-color: var(--secondary-orange);
                color: white;
                padding: 1rem 2.5rem;
                border-radius: 9999px;
                font-weight: 600;
                transition: all 0.3s ease;
                display: inline-flex;
                align-items: center;
                justify-content: center;
            }

            .btn-orange:hover {
                transform: translateY(-2px);
                box-shadow: 0 10px 20px rgba(233, 158, 90, 0.3);
                background-color: #d88d4a;
            }

            .btn-custom-teal {
                font-family: 'Fredoka', sans-serif;
                background-color: #32A8B8;
                color: white;
                padding: 1rem 2.5rem;
                border-radius: 9999px;
                font-weight: 600;
                transition: all 0.3s ease;
                display: inline-flex;
                align-items: center;
                justify-content: center;
            }

            .btn-custom-teal:hover,
            .btn-custom-teal:active {
                transform: translateY(-2px);
                box-shadow: 0 10px 20px rgba(234, 111, 113, 0.3);
                background-color: #EA6F71;
            }

            .btn-custom-lime {
                font-family: 'Fredoka', sans-serif;
                background-color: #97B41A;
                color: white;
                padding: 1rem 2.5rem;
                border-radius: 9999px;
                font-weight: 600;
                transition: all 0.3s ease;
                display: inline-flex;
                align-items: center;
                justify-content: center;
            }

            .btn-custom-lime:hover,
            .btn-custom-lime:active {
                transform: translateY(-2px);
                box-shadow: 0 10px 20px rgba(233, 157, 29, 0.3);
                background-color: #E99D1D;
            }

            .btn-custom-coral {
                font-family: 'Fredoka', sans-serif;
                background-color: #EA6F71;
                color: white;
                padding: 1rem 2.5rem;
                border-radius: 9999px;
                font-weight: 600;
                transition: all 0.3s ease;
                display: inline-flex;
                align-items: center;
                justify-content: center;
            }

            .btn-custom-coral:hover,
            .btn-custom-coral:active {
                transform: translateY(-2px);
                box-shadow: 0 10px 20px rgba(151, 180, 26, 0.3);
                background-color: #97B41A;
            }

            .organic-shape-container {
                position: relative;
                z-index: 1;
            }

            .organic-image-mask {
                border-radius: 30% 70% 70% 30% / 30% 30% 70% 70%;
                overflow: hidden;
                width: 100%;
                height: 100%;
                min-height: 500px;
                object-fit: cover;
                background: #fff;
                box-shadow: 0 20px 40px rgba(0, 0, 0, 0.1);
            }

            .dept-menu-card {
                background: rgba(255, 255, 255, 0.95);
                backdrop-filter: blur(10px);
                border-radius: 12px;
                box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
                border: 1px solid rgba(255, 255, 255, 0.5);
                width: 320px;
                position: absolute;
                top: 20px;
                left: -100px;
                z-index: 50;
            }

            @media (max-width: 1024px) {
                .dept-menu-card {
                    position: static;
                    width: 100%;
                    margin-bottom: 2rem;
                    left: 0;
                }

                .organic-image-mask {
                    min-height: 350px;
                    border-radius: 40px;
                    margin-top: 2rem;
                }

                .organic-shape-container {
                    padding: 0 10px;
                }
            }

            .dept-item {
                padding: 0.85rem 1.25rem;
                display: flex;
                align-items: center;
                justify-content: space-between;
                color: var(--primary-teal);
                font-size: 0.95rem;
                font-weight: 500;
                border-bottom: 1px solid #f1f5f9;
                transition: background 0.2s;
                cursor: pointer;
            }

            .dept-item:last-child {
                border-bottom: none;
            }

            .dept-item:hover {
                background: #f8fafc;
            }

            .dept-item.active {
                color: var(--secondary-orange);
            }

            .sub-menu-card {
                background: white;
                border-radius: 12px;
                box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
                position: absolute;
                left: 102%;
                top: 0;
                width: 240px;
                padding: 1rem;
                display: none;
            }

            .dept-item:hover .sub-menu-card {
                display: block;
            }

            .sub-menu-item {
                padding: 0.5rem 0;
                color: #4b5563;
                font-size: 0.9rem;
                transition: color 0.2s;
            }

            .sub-menu-item:hover {
                color: var(--primary-teal);
            }

            .swiper-pagination-hero {
                position: absolute;
                bottom: 40px !important;
                left: 0 !important;
                text-align: left !important;
            }

            .swiper-pagination-bullet {
                width: 12px;
                height: 12px;
                background: var(--primary-teal);
                opacity: 0.2;
            }

            .swiper-pagination-bullet-active {
                opacity: 1;
                width: 30px;
                border-radius: 6px;
            }

            @media (max-width: 1023px) {
                .hero-section {
                    background: linear-gradient(180deg, #f0f9ff 0%, #ffffff 100%);
                }

                .swiper-pagination-hero {
                    left: 0 !important;
                    right: 0 !important;
                    text-align: center !important;
                    bottom: 20px !important;
                }
            }

            /* Feature strip modern lift */
            .feature-strip {
                position: relative;
                z-index: 5;
            }

            /* Add to your existing styles */
            .organic-image-mask-mobile {
                border-radius: 24px;
                overflow: hidden;
                width: 100%;
                height: 400px;
                object-fit: cover;
                background: #fff;
                box-shadow: 0 10px 30px rgba(0, 0, 0, 0.15);
                position: relative;
            }

            /* Adjust pagination position for mobile */
            @media (max-width: 1023px) {
                .swiper-pagination-hero {
                    position: relative !important;
                    margin-top: 2rem;
                    bottom: 0 !important;
                }

                .hero-title {
                    text-shadow: 0 2px 10px rgba(0, 0, 0, 0.3);
                }

                .btn-orange {
                    position: relative;
                    z-index: 10;
                }
            }

            /* Ensure proper stacking */
            .hero-section .swiper-slide {
                display: flex;
                align-items: center;
                position: relative;
                overflow: hidden;
            }

            .text-custom-lime {
                color: #97B41A !important;
            }

            .text-custom-coral {
                color: #EA6F71 !important;
            }

            /* NEW SERVICE CARDS DESIGN (HALF-COLOURED) */
            .services-section-v2 {
                background-color: #32A8B8;
                /* Green top half */
                position: relative;
                padding: 0;
                overflow: hidden;
            }

            .services-section-v2::after {
                content: '';
                position: absolute;
                bottom: 0;
                left: 0;
                width: 100%;
                height: 40%;
                /* White bottom half */
                background-color: #ffffff;
                z-index: 1;
            }

            /* Sliding Marquee */
            .marquee-wrapper {
                background-color: #32A8B8;
                padding: 20px 0;
                /* Reduced from 40px */
                border-bottom: 2px solid rgba(255, 255, 255, 0.2);
                white-space: nowrap;
                overflow: hidden;
                position: relative;
                z-index: 2;
            }

            .marquee-text {
                display: inline-block;
                font-size: 80px;
                font-weight: 900;
                color: rgba(255, 255, 255, 0.9);
                text-transform: uppercase;
                animation: marquee 30s linear infinite;
                letter-spacing: 15px;
            }

            .marquee-text span {
                margin: 0 40px;
                display: inline-block;
            }

            @keyframes marquee {
                from {
                    transform: translateX(0);
                }

                to {
                    transform: translateX(-50%);
                }
            }

            .services-content-v2 {
                position: relative;
                z-index: 5;
                padding-top: 40px;
                /* Reduced from 60px */
                padding-bottom: 60px;
                /* Reduced from 80px */
            }

            .doodle-bg-light,
            .doodle-bg-dark {
                position: absolute;
                inset: -50px;
                pointer-events: none;
                z-index: 1;
                background-size: 400px;
                animation: floatBackground 20s ease-in-out infinite;
            }

            .doodle-bg-light {
                opacity: 0.15;
                background-image: url("data:image/svg+xml,%3Csvg width='400' height='400' viewBox='0 0 400 400' xmlns='http://www.w3.org/2000/svg'%3E%3Cg fill='none' stroke='white' stroke-width='1.5' stroke-linecap='round' stroke-linejoin='round'%3E%3Cpath d='M200 100 c -20 0 -35 15 -35 35 c 0 15 10 25 15 30 l 0 15 l 40 0 l 0 -15 c 5 -5 15 -15 15 -30 c 0 -20 -15 -35 -35 -35 Z'/%3E%3Cpath d='M185 185 l 30 0 m -30 5 l 30 0'/%3E%3Cpath d='M200 85 l 0 -10 M230 115 l 10 -10 M170 115 l -10 -10'/%3E%3Cpath d='M50 50 Q 70 30 90 50 T 130 50'/%3E%3Ccircle cx='300' cy='100' r='20'/%3E%3Cpath d='M350 300 l 20 20 m -20 0 l 20 -20'/%3E%3Crect x='100' y='300' width='30' height='30' rx='5'/%3E%3Cpath d='M40 250 c 10 0 10 20 20 20 s 10 -20 20 -20'/%3E%3Ccircle cx='150' cy='100' r='5' fill='white'/%3E%3Ccircle cx='250' cy='350' r='8'/%3E%3C/g%3E%3C/svg%3E");
            }

            .doodle-bg-dark {
                opacity: 0.05;
                background-image: url("data:image/svg+xml,%3Csvg width='400' height='400' viewBox='0 0 400 400' xmlns='http://www.w3.org/2000/svg'%3E%3Cg fill='none' stroke='%2332A8B8' stroke-width='1.5' stroke-linecap='round' stroke-linejoin='round'%3E%3Cpath d='M200 100 c -20 0 -35 15 -35 35 c 0 15 10 25 15 30 l 0 15 l 40 0 l 0 -15 c 5 -5 15 -15 15 -30 c 0 -20 -15 -35 -35 -35 Z'/%3E%3Cpath d='M185 185 l 30 0 m -30 5 l 30 0'/%3E%3Cpath d='M200 85 l 0 -10 M230 115 l 10 -10 M170 115 l -10 -10'/%3E%3Cpath d='M50 50 Q 70 30 90 50 T 130 50'/%3E%3Ccircle cx='300' cy='100' r='20'/%3E%3Cpath d='M350 300 l 20 20 m -20 0 l 20 -20'/%3E%3Crect x='100' y='300' width='30' height='30' rx='5'/%3E%3Cpath d='M40 250 c 10 0 10 20 20 20 s 10 -20 20 -20'/%3E%3Ccircle cx='150' cy='100' r='5' fill='%2332A8B8'/%3E%3Ccircle cx='250' cy='350' r='8'/%3E%3C/g%3E%3C/svg%3E");
            }

            @keyframes floatBackground {

                0%,
                100% {
                    transform: translate(0, 0);
                }

                50% {
                    transform: translate(20px, -20px);
                }
            }

            .servicesSwiper {
                padding: 20px 20px 60px !important;
                margin: 0 -20px;
            }

            .servicesSwiper .swiper-slide {
                height: auto !important;
                display: flex;
            }

            .service-card-v2 {
                background: white;
                border-radius: 40px;
                overflow: hidden;
                box-shadow: 0 15px 35px rgba(0, 0, 0, 0.08);
                transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
                display: flex;
                flex-direction: column;
                height: 100%;
                width: 100%;
                text-align: center;
                border: none;
            }

            .service-card-v2:hover {
                transform: translateY(-12px);
                box-shadow: 0 25px 50px rgba(0, 0, 0, 0.12);
            }

            .card-top-image-v2 {
                position: relative;
                height: 220px;
                overflow: hidden;
            }

            .card-top-image-v2 img {
                width: 100%;
                height: 100%;
                object-fit: cover;
                transition: transform 0.6s ease;
            }

            .service-card-v2:hover .card-top-image-v2 img {
                transform: scale(1.1);
            }

            .wavy-svg {
                position: absolute;
                bottom: -1px;
                left: 0;
                width: 100%;
                height: 50px;
                fill: currentColor;
            }

            .icon-bubble-v2 {
                position: absolute;
                left: 50%;
                bottom: 0px;
                transform: translate(-50%, 50%);
                width: 65px;
                height: 65px;
                border-radius: 50%;
                display: flex;
                align-items: center;
                justify-content: center;
                z-index: 10;
                box-shadow: 0 8px 15px rgba(0, 0, 0, 0.1);
            }

            .icon-bubble-v2 img {
                width: 32px;
                height: 32px;
                filter: brightness(0) invert(1);
            }

            .card-body-v2 {
                padding: 45px 25px 30px;
                flex-grow: 1;
                display: flex;
                flex-direction: column;
                align-items: center;
            }

            .card-title-v2 {
                font-size: 1.5rem;
                font-weight: 800;
                color: #2D3748;
                margin-bottom: 12px;
            }

            .card-text-v2 {
                font-size: 0.95rem;
                color: #718096;
                line-height: 1.6;
                margin-bottom: 25px;
            }

            .card-btn-v2 {
                width: 45px;
                height: 45px;
                border-radius: 50%;
                display: flex;
                align-items: center;
                justify-content: center;
                margin-top: auto;
                transition: all 0.3s ease;
                border: none;
            }

            .card-btn-v2:hover {
                transform: scale(1.15) rotate(15deg);
            }

            .card-btn-v2 svg {
                width: 20px;
                height: 20px;
                stroke: white;
            }

            .view-more-services-btn {
                background-color: #32A8B8;
                color: white;
                padding: 14px 35px;
                border-radius: 12px;
                font-weight: 700;
                text-transform: uppercase;
                letter-spacing: 1px;
                display: inline-block;
                transition: all 0.3s ease;
                box-shadow: 0 10px 20px rgba(50, 168, 184, 0.2);
            }

            .view-more-services-btn:hover {
                transform: translateY(-3px);
                box-shadow: 0 15px 30px rgba(50, 168, 184, 0.3);
                background-color: #2a8f9d;
                color: white;
            }
        </style>
    @endpush

    {{-- ================= HERO SECTION ================= --}}
    <section class="hero-section pt-10 pb-10 lg:pt-12 lg:pb-20 px-4 sm:px-6 lg:px-8 relative">
        <div class="max-w-7xl mx-auto relative z-10">
            <div class="swiper heroSwiper overflow-visible">
                <div class="swiper-wrapper">

                    {{-- SLIDE 1 --}}
                    <div class="swiper-slide">
                        {{-- Background Elements --}}
                        <div class="hero-bg-doodles"></div>

                        <!-- CHILD FRIENDLY BACKGROUND -->
                        <div class="hero-pattern-lightbulb"></div>
                        <div class="hero-doodle-lines"></div>
                        <div class="hero-gradient-blob"></div>

                        <div class="hero-geo-shapes">
                            <span class="circle1"></span>
                            <span class="circle2"></span>
                            <span class="circle3"></span>
                            <span class="circle4"></span>
                        </div>

                        {{-- Floating Decorations --}}
                        <div class="floating-decoration decoration-pencil hidden lg:block" data-aos="fade-down"
                            data-aos-delay="500">
                            <svg viewBox="0 0 100 100" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M20 80 L30 85 L85 30 L75 25 Z" fill="#EA6F71" />
                                <path d="M85 30 L90 25 L80 15 L75 20" fill="#E99D1D" />
                                <path d="M20 80 L15 85 L30 85 Z" fill="#32A8B8" />
                                <path d="M10 90 Q 40 70 70 90 T 130 70" stroke="#EA6F71" stroke-width="2"
                                    stroke-dasharray="4 4" fill="none" />
                            </svg>
                        </div>

                        <div class="floating-decoration decoration-plane hidden lg:block" data-aos="zoom-in"
                            data-aos-delay="800">
                            <svg viewBox="0 0 100 100" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M10 50 L90 20 L50 90 L45 55 Z" fill="#32A8B8" />
                                <path d="M45 55 L90 20 L10 50 Z" fill="#2A8F9D" />
                                <path d="M5 60 Q 15 70 25 60 T 45 60" stroke="#97B41A" stroke-width="1.5"
                                    stroke-dasharray="3 3" fill="none" />
                            </svg>
                        </div>

                        {{-- Accent Dots and Sparkles --}}
                        <div class="accent-dot dot-teal"></div>
                        <div class="accent-dot dot-coral"></div>
                        <div class="accent-dot dot-lime"></div>
                        <div class="accent-dot dot-orange"></div>
                        <div class="sparkle" style="top: 25%; right: 25%;"></div>
                        <div class="sparkle" style="bottom: 15%; left: 30%;"></div>

                        <div class="grid lg:grid-cols-2 gap-12 lg:gap-20 items-center relative z-10 w-full">

                            {{-- CONTENT - Mobile / Desktop --}}
                            <div class="z-20 text-center lg:text-left relative w-full lg:relative">
                                {{-- Mobile optimized layout content --}}
                                <div class="lg:hidden flex flex-col items-center">
                                    <div class="mobile-hero-image-container">
                                        <div class="mobile-organic-circle">
                                            <img src="{{ asset('images/image9.jpg') }}" alt="Wellness">
                                        </div>
                                    </div>

                                    <div class="mobile-content-card">
                                        <span class="mobile-subheading">Best Child Development Center In Kerala</span>
                                        <h1 class="hero-title">About Us</h1>
                                        <p class="hero-description">
                                            Our center is designed to be a safe, caring, and hopeful environment where every
                                            child's unique potential is recognized and nurtured.
                                        </p>

                                        <a href="/contact" class="btn-custom-teal">Talk To Us</a>
                                    </div>
                                </div>

                                {{-- Desktop layout --}}
                                <div class="hidden lg:block">
                                    <h1 class="hero-title text-5xl lg:text-7xl mb-8">
                                        Precision Care for<br>
                                        the Human<br>
                                        Experience
                                    </h1>

                                    <p
                                        class="hero-description text-gray-600 text-lg lg:text-xl leading-relaxed mb-10 max-w-lg">
                                        Betterly Wellness reimagines wellbeing through a thoughtful blend of
                                        advanced science and genuine emotional understanding.
                                    </p>

                                    <a href="/contact" class="btn-custom-teal text-lg mx-auto lg:mx-0">
                                        Talk To Us
                                    </a>
                                </div>
                            </div>

                            {{-- RIGHT IMAGE - Hidden on mobile, shown on desktop --}}
                            <div class="organic-shape-container hidden lg:block">
                                <div class="organic-image-mask">
                                    <img src="{{ asset('images/image7.jpg') }}" class="w-full h-full object-cover"
                                        alt="Wellness Experience">
                                </div>
                            </div>

                        </div>
                    </div>

                    {{-- SLIDE 2 --}}
                    <div class="swiper-slide">
                        {{-- Background Elements --}}
                        <div class="hero-bg-doodles" style="transform: rotate(180deg); opacity: 0.03;"></div>

                        <!-- CHILD FRIENDLY BACKGROUND -->
                        <div class="hero-pattern-lightbulb"></div>
                        <div class="hero-doodle-lines"></div>
                        <div class="hero-gradient-blob"></div>

                        <div class="hero-geo-shapes">
                            <span class="circle1"></span>
                            <span class="circle2"></span>
                            <span class="circle3"></span>
                            <span class="circle4"></span>
                        </div>

                        {{-- Floating Decorations --}}
                        <div class="floating-decoration hidden lg:block" style="top: 20%; right: 5%; width: 70px;"
                            data-aos="fade-left">
                            <svg viewBox="0 0 100 100" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect x="30" y="20" width="40" height="60" rx="10" fill="#EA6F71" opacity="0.8" />
                                <circle cx="50" cy="40" r="10" fill="white" opacity="0.5" />
                            </svg>
                        </div>

                        <div class="floating-decoration decoration-plane hidden lg:block"
                            style="bottom: 15%; left: 10%; transform: scaleX(-1);" data-aos="zoom-in">
                            <svg viewBox="0 0 100 100" fill="none" xmlns="http://www.w3.org/2000/svg"
                                style="transform: rotate(-45deg);">
                                <path d="M10 50 L90 20 L50 90 L45 55 Z" fill="#E99D1D" />
                                <path d="M5 60 Q 15 70 25 60 T 45 60" stroke="#EA6F71" stroke-width="1.5"
                                    stroke-dasharray="3 3" fill="none" />
                            </svg>
                        </div>

                        <div class="accent-dot dot-lime" style="top: 30%; left: 40%;"></div>
                        <div class="accent-dot dot-orange" style="bottom: 40%; right: 30%;"></div>
                        <div class="sparkle" style="top: 15%; left: 20%;"></div>

                        <div class="grid lg:grid-cols-2 gap-12 lg:gap-20 items-center relative z-10 w-full">

                            <div class="z-20 text-center lg:text-left relative w-full lg:relative">
                                {{-- Mobile optimized layout content --}}
                                <div class="lg:hidden flex flex-col items-center">
                                    <div class="mobile-hero-image-container">
                                        <div class="mobile-organic-circle">
                                            <img src="{{ asset('images/image8.jpg') }}" alt="Expert Guidance">
                                        </div>
                                    </div>

                                    <div class="mobile-content-card">
                                        <span class="mobile-subheading">Comprehensive Expert Guidance</span>
                                        <h1 class="hero-title">Join Our Family</h1>
                                        <p class="hero-description">
                                            Join over 1000 families who trust our certified therapists for holistic
                                            developmental care and specialized support.
                                        </p>

                                        <a href="/contact" class="btn-custom-lime">Book Assessment</a>
                                    </div>
                                </div>

                                {{-- Desktop layout --}}
                                <div class="hidden lg:block">
                                    <h1 class="hero-title text-5xl lg:text-7xl mb-8 text-custom-lime">
                                        Empowering<br>
                                        Potential with<br>
                                        Expert Guidance
                                    </h1>

                                    <p
                                        class="hero-description text-gray-600 text-lg lg:text-xl leading-relaxed mb-10 max-w-lg">
                                        Join over 1000 families who trust our certified therapists
                                        for holistic developmental care.
                                    </p>

                                    <a href="/contact" class="btn-custom-lime text-lg mx-auto lg:mx-0">
                                        Book Assessment
                                    </a>
                                </div>
                            </div>

                            {{-- RIGHT IMAGE - Hidden on mobile --}}
                            <div class="organic-shape-container hidden lg:block">
                                <div class="organic-image-mask">
                                    <img src="{{ asset('images/image6.jpg') }}" class="w-full h-full object-cover"
                                        alt="Expert Care">
                                </div>
                            </div>

                        </div>
                    </div>

                    {{-- SLIDE 3 --}}
                    <div class="swiper-slide">
                        {{-- Background Elements --}}
                        <div class="hero-bg-doodles" style="background-size: 200px; opacity: 0.04;"></div>

                        <!-- CHILD FRIENDLY BACKGROUND -->
                        <div class="hero-pattern-lightbulb"></div>
                        <div class="hero-doodle-lines"></div>
                        <div class="hero-gradient-blob"></div>

                        <div class="hero-geo-shapes">
                            <span class="circle1"></span>
                            <span class="circle2"></span>
                            <span class="circle3"></span>
                            <span class="circle4"></span>
                        </div>
                        {{-- Floating Decorations --}}
                        <div class="floating-decoration hidden lg:block" style="top: 10%; left: 45%; width: 50px;"
                            data-aos="fade-down">
                            <svg viewBox="0 0 100 100" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M50 10 L60 40 L90 50 L60 60 L50 90 L40 60 L10 50 L40 40 Z" fill="#97B41A" />
                            </svg>
                        </div>

                        <div class="accent-dot dot-teal" style="top: 20%; right: 40%;"></div>
                        <div class="accent-dot dot-coral" style="bottom: 10%; left: 15%;"></div>
                        <div class="sparkle" style="bottom: 25%; right: 10%;"></div>

                        <div class="grid lg:grid-cols-2 gap-12 lg:gap-20 items-center relative z-10 w-full">

                            <div class="z-20 text-center lg:text-left relative w-full lg:relative">
                                {{-- Mobile optimized layout content --}}
                                <div class="lg:hidden flex flex-col items-center">
                                    <div class="mobile-hero-image-container">
                                        <div class="mobile-organic-circle">
                                            <img src="{{ asset('images/image10.png') }}" alt="Growth Journey">
                                        </div>
                                    </div>

                                    <div class="mobile-content-card">
                                        <span class="mobile-subheading">Supporting Every Step</span>
                                        <h1 class="hero-title">Our Services</h1>
                                        <p class="hero-description">
                                            From early intervention to specialized therapies, we walk alongside families at
                                            every stage of development.
                                        </p>

                                        <a href="/services" class="btn-custom-coral">Explore Services</a>
                                    </div>
                                </div>

                                {{-- Desktop layout --}}
                                <div class="hidden lg:block">
                                    <h1 class="hero-title text-5xl lg:text-7xl mb-8 text-custom-coral">
                                        Supporting Every<br>
                                        Child's Growth<br>
                                        Journey
                                    </h1>

                                    <p
                                        class="hero-description text-gray-600 text-lg lg:text-xl leading-relaxed mb-10 max-w-lg">
                                        From early intervention to specialized therapies,
                                        we walk alongside families at every stage of development.
                                    </p>

                                    <a href="/services" class="btn-custom-coral text-lg mx-auto lg:mx-0">
                                        Explore Services
                                    </a>
                                </div>
                            </div>

                            {{-- RIGHT IMAGE - Hidden on mobile --}}
                            <div class="organic-shape-container hidden lg:block">
                                <div class="organic-image-mask">
                                    <img src="{{ asset('images/image4.jpg') }}" class="w-full h-full object-cover"
                                        alt="Child Development Care">
                                </div>
                            </div>

                        </div>
                    </div>

                </div>

                {{-- PAGINATION --}}
                <div class="swiper-pagination-hero swiper-pagination"></div>
            </div>

        </div>
    </section>



    @push('scripts')
        <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
        <script>
            document.addEventListener('DOMContentLoaded', function () {
                var swiperHero = new Swiper(".heroSwiper", {
                    direction: "horizontal",
                    slidesPerView: 1,
                    spaceBetween: 30,
                    loop: true,
                    autoplay: {
                        delay: 5000,
                        disableOnInteraction: false,
                    },
                    pagination: {
                        el: ".swiper-pagination-hero",
                        clickable: true,
                    },
                    effect: "slide",
                    speed: 1000,
                });

                var swiperServices = new Swiper(".servicesSwiper", {
                    slidesPerView: 1,
                    spaceBetween: 30,
                    loop: true,
                    autoplay: {
                        delay: 3500,
                        disableOnInteraction: false,
                    },
                    pagination: {
                        el: ".swiper-pagination",
                        clickable: true,
                    },
                    breakpoints: {
                        640: {
                            slidesPerView: 2,
                            spaceBetween: 20,
                        },
                        1024: {
                            slidesPerView: 3,
                            spaceBetween: 30,
                        },
                        1280: {
                            slidesPerView: 4,
                            spaceBetween: 30,
                        },
                    },
                    speed: 800,
                });

            });
        </script>
    @endpush

    {{-- ================= FEATURE STRIP (UNDER HERO) ================= --}}
    <section class="feature-strip bg-white py-16 lg:py-24 relative overflow-hidden">
        <div class="doodle-bg-dark" style="opacity: 0.03;"></div>
        {{-- Background decorative elements (Subtle geometric network) --}}
        <div class="absolute inset-0 pointer-events-none" style="z-index: 0;">
            <svg class="absolute w-full h-full opacity-10" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg">
                <defs>
                    <pattern id="network" x="0" y="0" width="150" height="150" patternUnits="userSpaceOnUse">
                        <path d="M75 0 L75 150 M0 75 L150 75" stroke="#32A8B8" stroke-width="0.5" stroke-dasharray="2 6" />
                        <circle cx="75" cy="75" r="3" fill="none" stroke="#EA6F71" stroke-width="1" />
                        <circle cx="0" cy="75" r="2" fill="#32A8B8" />
                        <circle cx="75" cy="0" r="2" fill="#32A8B8" />
                    </pattern>
                </defs>
                <rect width="100%" height="100%" fill="url(#network)" />
            </svg>
            <div
                class="absolute -top-40 -left-40 w-96 h-96 bg-teal-50 rounded-full mix-blend-multiply filter blur-3xl opacity-50 animate-blob">
            </div>
            <div
                class="absolute top-20 right-0 w-80 h-80 bg-pink-50 rounded-full mix-blend-multiply filter blur-3xl opacity-50 animate-blob animation-delay-2000">
            </div>
        </div>

        <div class="max-w-[90rem] mx-auto px-4 sm:px-6 lg:px-8 relative z-10">

            {{-- SECTION HEADING with sliding animation --}}
            <div class="text-center mb-16" data-aos="fade-down" data-aos-duration="1000">
                <span
                    class="inline-block px-5 py-2 rounded-full bg-teal-50/80 text-teal-600 font-bold text-sm mb-4 tracking-wider border border-teal-100 backdrop-blur-sm"
                    data-aos="zoom-in" data-aos-delay="200">
                    ✦ What We Offer ✦
                </span>
                <h2 class="text-4xl lg:text-5xl font-extrabold text-[#1a2b4b] tracking-tight mb-4">
                    Our Services
                </h2>
                <p class="mt-4 text-gray-500 max-w-2xl mx-auto text-base sm:text-lg font-medium" data-aos="fade-up"
                    data-aos-delay="300">
                    Comprehensive care and support designed for children, adolescents, and families.
                </p>
            </div>

            {{-- SERVICES FLOATING CARDS --}}
            <div class="grid grid-cols-2 md:grid-cols-3 xl:grid-cols-6 gap-6 lg:gap-8 justify-center">
                @php
                    $featureServices = [
                        ['icon' => 'psychological-assessment.svg', 'title' => 'PSYCHOLOGICAL ASSESSMENT', 'bgColor' => '#F4F9FA', 'iconColor' => '#006684', 'delay' => '100'],
                        ['icon' => 'behavioural-therapy.svg', 'title' => 'BEHAVIOURAL THERAPY', 'bgColor' => '#E8F5E9', 'iconColor' => '#2E7D32', 'delay' => '200'],
                        ['icon' => 'speech-therapy.svg', 'title' => 'SPEECH THERAPY', 'bgColor' => '#FCE4EC', 'iconColor' => '#C2185B', 'delay' => '300'],
                        ['icon' => 'special-education.svg', 'title' => 'SPECIAL EDUCATION', 'bgColor' => '#FFF3E0', 'iconColor' => '#E65100', 'delay' => '400'],
                        ['icon' => 'occupational-therapy.svg', 'title' => 'OCCUPATIONAL THERAPY', 'bgColor' => '#E3F2FD', 'iconColor' => '#1565C0', 'delay' => '500'],
                        ['icon' => 'psychotherapy-counselling.svg', 'title' => 'PSYCHOTHERAPY & COUNSELLING', 'bgColor' => '#F3E5F5', 'iconColor' => '#6A1B9A', 'delay' => '600'],
                    ];
                @endphp

                @foreach($featureServices as $index => $service)
                    <div data-aos="fade-up" data-aos-delay="{{ $service['delay'] }}" data-aos-duration="800" class="h-full">
                        <div class="service-card-modern">
                            <div class="service-icon-wrapper"
                                style="background-color: {{ $service['bgColor'] }}; border: 1px solid rgba(0,0,0,0.03);">
                                {{-- We apply a css filter hack or specific styled icon if needed, for now we load the SVG and
                                let it display normally. Ideally these are single-color SVGs --}}
                                <img src="{{ asset('images/icons/' . $service['icon']) }}" alt="{{ $service['title'] }}"
                                    class="service-icon-img" style="filter: drop-shadow(0px 2px 4px rgba(0,0,0,0.1));">
                            </div>
                            <h3 class="service-card-title">{{ $service['title'] }}</h3>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- ================= REDESIGNED SERVICES SECTION ================= --}}
    <section class="services-section-v2 overflow-hidden">
        {{-- Sliding Marquee Heading --}}
        <div class="marquee-wrapper">
            <div class="marquee-text">
                <span>OFFLINE</span> <span>SERVICES</span> <span>ONLINE</span> <span>24 Hour support</span>
                <span>OFFLINE</span> <span>SERVICES</span> <span>ONLINE</span> <span>24 Hour support</span>
            </div>
        </div>

        <div class="services-content-v2">
            <div class="doodle-bg-light"></div>

            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
                {{-- Section Heading --}}
                <div class="text-center mb-10" data-aos="fade-up"> {{-- Reduced mb-16 to mb-10 --}}
                    <p class="text-white/80 font-medium mb-2 italic text-xl">Our Services</p> {{-- Reduced mb-4 to mb-2 --}}
                    <h2 class="text-4xl lg:text-6xl font-extrabold text-white tracking-tight">
                        Building Skills, Inspiring Confidence
                    </h2>
                </div>
                @php
                    $v2Services = [
                        [
                            'title' => 'Speech Therapy',
                            'description' => 'Speech therapy improves communication by treating speech delays, language disorders, and articulation issues through personalized strategies.',
                            'image' => 'images/image7.jpg',
                            'icon' => 'speech-therapy.svg',
                            'color' => '#32A8B8',
                            'bgColor' => '#ffffff',
                            'borderColor' => 'rgba(50, 168, 184, 0.2)',
                        ],
                        [
                            'title' => 'Special Education',
                            'description' => 'Special education supports diverse learners through individualized strategies and skill-based instruction to foster meaningful growth.',
                            'image' => 'images/image8.jpg',
                            'icon' => 'special-education.svg',
                            'color' => '#EA6F71',
                            'bgColor' => '#ffffff',
                            'borderColor' => 'rgba(234, 111, 113, 0.2)',
                        ],
                        [
                            'title' => 'Behavioral Therapy',
                            'description' => 'Behavioral therapy effectively modifies negative behaviors and enhances emotional regulation through structured techniques.',
                            'image' => 'images/image6.jpg',
                            'icon' => 'behavioural-therapy.svg',
                            'color' => '#97B41A',
                            'bgColor' => '#ffffff',
                            'borderColor' => 'rgba(151, 180, 26, 0.2)',
                        ],
                        [
                            'title' => 'Occupation Therapy',
                            'description' => 'Occupational therapy effectively develops daily living skills and boosts motor coordination through personalized interventions.',
                            'image' => 'images/image4.jpg',
                            'icon' => 'occupational-therapy.svg',
                            'color' => '#E99D1D',
                            'bgColor' => '#ffffff',
                            'borderColor' => 'rgba(233, 157, 29, 0.2)',
                        ],
                        [
                            'title' => 'Psychological Assessment',
                            'description' => 'Comprehensive assessments including IQ, learning disabilities, and behavioral evaluations for precise diagnostic clarity.',
                            'image' => 'images/image3.jpg',
                            'icon' => 'psychological-assessment.svg',
                            'color' => '#32A8B8',
                            'bgColor' => '#ffffff',
                            'borderColor' => 'rgba(50, 168, 184, 0.2)',
                        ],
                        [
                            'title' => 'Counseling',
                            'description' => 'Professional psychotherapy and counseling services for children and families to support emotional well-being.',
                            'image' => 'images/image2.jpg',
                            'icon' => 'psychotherapy-counselling.svg',
                            'color' => '#EA6F71',
                            'bgColor' => '#ffffff',
                            'borderColor' => 'rgba(234, 111, 113, 0.2)',
                        ]
                    ];
                @endphp

                <div class="swiper servicesSwiper">
                    <div class="swiper-wrapper">
                        @foreach($v2Services as $index => $service)
                            <div class="swiper-slide">
                                <div class="service-card-v2" data-aos="fade-up" data-aos-delay="{{ ($index + 1) * 100 }}"
                                    style="background-color: {{ $service['bgColor'] }}; border: 1px solid {{ $service['borderColor'] }};">
                                    <div class="card-top-image-v2">
                                        <img src="{{ asset($service['image']) }}" alt="{{ $service['title'] }}">
                                        <div class="icon-bubble-v2" style="background-color: {{ $service['color'] }}">
                                            <img src="{{ asset('images/icons/' . $service['icon']) }}"
                                                alt="{{ $service['title'] }}">
                                        </div>
                                    </div>
                                    <div class="card-body-v2">
                                        <h3 class="card-title-v2">{{ $service['title'] }}</h3>
                                        <p class="card-text-v2">{{ $service['description'] }}</p>

                                        <a href="/services" class="card-btn-v2"
                                            style="background-color: {{ $service['color'] }}">
                                            <svg fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"
                                                    d="M17 8l4 4m0 0l-4 4m4-4H3" />
                                            </svg>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    {{-- Swiper Pagination --}}
                    <div class="swiper-pagination"></div>
                </div>

                <div class="text-center mt-12 relative z-20" data-aos="fade-up">
                    <a href="/services" class="view-more-services-btn">
                        View More Services
                    </a>
                </div>
            </div>
    </section>

    {{-- ================= MISSION & CTA SECTION ================= --}}
    <section class="py-12 lg:py-16 relative overflow-hidden bg-white">
        <div class="doodle-bg-dark"></div>
        {{-- Animated background elements (Scaled down) --}}
        <div class="absolute inset-0 overflow-hidden pointer-events-none">
            <div
                class="absolute -top-20 -right-20 w-64 h-64 bg-teal-100 rounded-full mix-blend-multiply filter blur-3xl opacity-30 animate-pulse-slow">
            </div>
            <div
                class="absolute -bottom-20 -left-20 w-64 h-64 bg-pink-100 rounded-full mix-blend-multiply filter blur-3xl opacity-30 animate-pulse-slow animation-delay-2000">
            </div>
        </div>

        <div class="max-w-3xl mx-auto px-4 sm:px-6 relative z-10">
            {{-- Founder card with sliding entrance --}}
            <div class="relative bg-white/90 backdrop-blur-lg p-6 lg:p-10 rounded-3xl shadow-lg border border-gray-100 transform hover:scale-[1.01] transition-all duration-500 text-center"
                data-aos="zoom-in" data-aos-duration="800">

                {{-- Avatar & Meta Data --}}
                <div class="flex flex-col items-center mb-6">
                    <div class="relative inline-block mb-3">
                        <div
                            class="absolute inset-0 bg-gradient-to-tr from-teal-400 to-pink-400 rounded-full blur-md opacity-40">
                        </div>
                        <div
                            class="relative w-24 h-24 rounded-full bg-white p-1 border border-gray-100 shadow-sm relative z-10">
                            <img src="{{ asset('images/Logo.png') }}" class="w-full h-full object-cover rounded-full"
                                alt="Mushtaq - Founder & CEO">
                        </div>
                    </div>

                    <h3 class="font-bold text-gray-900 text-xl tracking-tight">Mushtaq</h3>
                    <span
                        class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full bg-teal-50 text-teal-700 text-xs font-semibold mt-1">
                        <span class="w-1.5 h-1.5 rounded-full bg-teal-500 animate-pulse"></span>
                        Founder & CEO
                    </span>
                </div>

                {{-- Quote content --}}
                <div class="relative max-w-2xl mx-auto">
                    <div class="absolute -top-4 -left-2 text-teal-100 transform -scale-x-100">
                        <svg width="32" height="32" viewBox="0 0 24 24" fill="currentColor">
                            <path d="M14 11H19L17 19H12L14 11ZM5 11H10L8 19H3L5 11Z" />
                        </svg>
                    </div>

                    <p class="text-base lg:text-lg text-gray-600 leading-relaxed font-serif italic relative z-10 px-6">
                        "Our mission is to create a world where every child, regardless of their challenges, can discover
                        their strengths and shine brightly. We believe in personalized care that addresses the unique needs
                        of each child."
                    </p>

                    <div class="absolute -bottom-4 -right-2 text-pink-100">
                        <svg width="32" height="32" viewBox="0 0 24 24" fill="currentColor">
                            <path d="M14 11H19L17 19H12L14 11ZM5 11H10L8 19H3L5 11Z" />
                        </svg>
                    </div>
                </div>
            </div>

            {{-- CTA Buttons --}}
            <div class="mt-8 flex flex-col sm:flex-row justify-center gap-4">
                <a href="/services"
                    class="group relative inline-flex items-center justify-center gap-2 overflow-hidden rounded-full bg-gradient-to-r from-teal-500 to-teal-600 px-8 py-3.5 text-white font-semibold text-sm shadow-md hover:shadow-lg transform hover:-translate-y-1 transition-all duration-300"
                    data-aos="fade-up" data-aos-delay="200">
                    <span
                        class="absolute inset-0 bg-gradient-to-r from-teal-600 to-teal-700 opacity-0 group-hover:opacity-100 transition-opacity duration-300"></span>
                    <span class="relative flex items-center gap-2">
                        <span class="transform group-hover:scale-110 transition-transform duration-300">✦</span>
                        View All Services
                        <svg class="w-4 h-4 transform group-hover:translate-x-1 transition-transform duration-300"
                            fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M17 8l4 4m0 0l-4 4m4-4H3" />
                        </svg>
                    </span>
                </a>

                <a href="/contact"
                    class="group relative inline-flex items-center justify-center gap-2 overflow-hidden rounded-full border border-teal-500 bg-white px-8 py-3.5 text-teal-600 font-semibold text-sm hover:bg-teal-50 transform hover:-translate-y-1 transition-all duration-300"
                    data-aos="fade-up" data-aos-delay="300">
                    <span class="relative flex items-center gap-2">
                        <span class="transform group-hover:rotate-12 transition-transform duration-300">📅</span>
                        Book Consultation
                        <svg class="w-5 h-5 transform group-hover:rotate-12 transition-transform duration-500" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"
                                d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                        </svg>
                    </span>
                </a>
            </div>
        </div>
    </section>

    <style>
        /* Custom animations */
        @keyframes blob {
            0% {
                transform: translate(0px, 0px) scale(1);
            }

            33% {
                transform: translate(30px, -50px) scale(1.1);
            }

            66% {
                transform: translate(-20px, 20px) scale(0.9);
            }

            100% {
                transform: translate(0px, 0px) scale(1);
            }
        }

        @keyframes float {
            0% {
                transform: translateY(0px);
            }

            50% {
                transform: translateY(-20px);
            }

            100% {
                transform: translateY(0px);
            }
        }

        @keyframes spin-slow {
            from {
                transform: translate(-50%, -50%) rotate(0deg);
            }

            to {
                transform: translate(-50%, -50%) rotate(360deg);
            }
        }

        @keyframes pulse-slow {

            0%,
            100% {
                opacity: 0.2;
            }

            50% {
                opacity: 0.3;
            }
        }

        @keyframes slide-up {
            0% {
                opacity: 0;
                transform: translateY(20px);
            }

            100% {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @keyframes hover-pop {
            0% {
                transform: scale(1);
            }

            50% {
                transform: scale(1.05);
            }

            100% {
                transform: scale(1.02);
            }
        }

        @keyframes icon-bounce {

            0%,
            100% {
                transform: translateY(0);
            }

            50% {
                transform: translateY(-8px);
            }
        }

        .service-card-modern {
            background: white;
            border-radius: 20px;
            padding: 2.5rem 1.5rem;
            box-shadow: 0 10px 40px rgba(0, 0, 0, 0.04);
            border: 1px solid rgba(255, 255, 255, 0.5);
            transition: all 0.5s cubic-bezier(0.175, 0.885, 0.32, 1.275);
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100%;
            position: relative;
            overflow: hidden;
            z-index: 2;
        }

        .service-card-modern::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(135deg, rgba(234, 250, 255, 0.5) 0%, rgba(255, 255, 255, 0) 100%);
            z-index: -1;
            opacity: 0;
            transition: opacity 0.5s ease;
        }

        .service-card-modern:hover {
            transform: translateY(-10px);
            box-shadow: 0 20px 50px rgba(0, 0, 0, 0.08);
            border-color: rgba(50, 168, 184, 0.2);
            animation: hover-pop 0.4s ease-out forwards;
        }

        .service-card-modern:hover::before {
            opacity: 1;
        }

        .service-icon-wrapper {
            width: 80px;
            height: 80px;
            border-radius: 20px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 1.5rem;
            transition: all 0.4s ease;
            position: relative;
        }

        .service-card-modern:hover .service-icon-wrapper {
            animation: icon-bounce 0.6s ease-in-out;
            border-radius: 50%;
        }

        .service-icon-img {
            width: 40px;
            height: 40px;
            object-fit: contain;
            transition: all 0.4s ease;
        }

        .service-card-modern:hover .service-icon-img {
            transform: scale(1.1);
        }

        .service-card-title {
            color: #1a365d;
            font-size: 0.9rem;
            font-weight: 800;
            text-transform: uppercase;
            letter-spacing: 0.5px;
            text-align: center;
            line-height: 1.4;
            transition: color 0.4s ease;
            min-height: 40px;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .service-card-modern:hover .service-card-title {
            color: #32A8B8;
        }

        /* Swiper Highlight Styles for feature strip */
        .featureSwiper .swiper-slide {
            transition: all 0.6s ease;
            opacity: 0.5;
            transform: scale(0.85);
            /* Normal cards are smaller */
        }

        .featureSwiper .swiper-slide-active {
            opacity: 1;
            transform: scale(1.15);
            /* Selected card is bigger */
            z-index: 20;
        }

        .featureSwiper .swiper-slide-active .service-card-modern {
            /* Glow shadow */
            box-shadow: 0 25px 50px rgba(50, 168, 184, 0.25), 0 0 20px rgba(50, 168, 184, 0.1);
            border-color: rgba(50, 168, 184, 0.4);
            /* Brighter background */
            background: #f4fdff;
        }

        .featureSwiper .swiper-slide-active .service-card-modern::before {
            opacity: 1;
        }

        .featureSwiper .swiper-slide-active .service-icon-wrapper {
            border-radius: 50%;
            /* Continuous icon bounce */
            animation: icon-bounce 1.5s ease-in-out infinite;
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.05);
        }

        .featureSwiper .swiper-slide-active .service-icon-img {
            transform: scale(1.15);
        }

        .featureSwiper .swiper-slide-active .service-card-title {
            color: #32A8B8;
        }

        .animate-blob {
            animation: blob 10s infinite;
        }

        .animate-float {
            animation: float 6s ease-in-out infinite;
        }

        .animate-spin-slow {
            animation: spin-slow 20s linear infinite;
        }

        .animate-pulse-slow {
            animation: pulse-slow 4s ease-in-out infinite;
        }

        .animate-slide-up {
            animation: slide-up 0.6s ease-out forwards;
        }

        .animation-delay-2000 {
            animation-delay: 2s;
        }

        .animation-delay-3000 {
            animation-delay: 3s;
        }

        .animation-delay-4000 {
            animation-delay: 4s;
        }

        /* Smooth hover transitions */
        .group:hover .group-hover\:rotate-6 {
            transform: rotate(6deg);
        }

        .group:hover .group-hover\:scale-110 {
            transform: scale(1.1);
        }

        .group:hover .group-hover\:translate-y-0 {
            transform: translateY(0);
        }

        .group:hover .group-hover\:opacity-100 {
            opacity: 1;
        }

        /* Background pattern */
        .bg-grid-pattern {
            background-image: linear-gradient(to right, #e5e7eb 1px, transparent 1px),
                linear-gradient(to bottom, #e5e7eb 1px, transparent 1px);
            background-size: 30px 30px;
        }

        /* Smooth scrolling for animations */
        html {
            scroll-behavior: smooth;
        }

        /* Gradient text */
        .text-gradient {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }
    </style>







    {{-- ================= WHY CHOOSE US (PREMIUM VERSION) ================= --}}
    <section class="why-section py-32 relative overflow-hidden">

        {{-- Top Wave Divider --}}
        <div class="absolute top-0 left-0 w-full overflow-hidden leading-[0] z-20">
            <svg viewBox="0 0 1200 120" preserveAspectRatio="none" class="relative block w-[calc(100%+1.3px)] h-[40px] lg:h-[70px]">
                <path d="M321.39,56.44c58-10.79,114.16-30.13,172-41.86,82.39-16.72,168.19-17.73,250.45-.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V0H0V120H0V0Z" fill="#ffffff"></path>
            </svg>
        </div>

        {{-- floating shapes --}}
        <div class="floating-shape shape1"></div>
        <div class="floating-shape shape2"></div>
        <div class="floating-shape shape3"></div>

        <div class="max-w-7xl mx-auto px-6 lg:px-8 relative z-10">

            {{-- TITLE --}}
            <div class="text-center max-w-3xl mx-auto mb-16 text-white" style="font-family: 'Fredoka', sans-serif;">

                <h2 class="text-4xl lg:text-6xl font-extrabold mb-6 tracking-tight" style="text-shadow: 0 4px 15px rgba(255, 255, 255, 0.1);">
                    Why Parents Trust GEMS
                </h2>

                <p class="text-lg opacity-90">
                    We go beyond traditional therapy to provide a holistic ecosystem
                    for your child's growth.
                </p>

            </div>

            {{-- CARDS --}}
            <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-10">

                {{-- CARD --}}
                <div class="why-card-premium">
                    <div class="icon-box" style="background-color: #32A8B8;">
                        <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z" />
                        </svg>
                    </div>
                    <h3>Expert Team</h3>
                    <p>
                        Highly qualified and RCI certified professionals dedicated
                        to your child.
                    </p>
                </div>


                {{-- CARD --}}
                <div class="why-card-premium">
                    <div class="icon-box" style="background-color: #E99D1D;">
                        <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0zM10 7v3m0 0v3m0-3h3m-3 0H7" />
                        </svg>
                    </div>
                    <h3>Evidence Based</h3>
                    <p>
                        Scientific approach to therapy with proven methodologies
                        and tracking.
                    </p>
                </div>


                {{-- CARD --}}
                <div class="why-card-premium">
                    <div class="icon-box" style="background-color: #EA6F71;">
                        <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" />
                        </svg>
                    </div>
                    <h3>World Class Facility</h3>
                    <p>
                        Child-friendly, safe, and stimulating environment
                        for optimal learning.
                    </p>
                </div>


                {{-- CARD --}}
                <div class="why-card-premium">
                    <div class="icon-box" style="background-color: #32A8B8;">
                        <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                        </svg>
                    </div>
                    <h3>Parent Support</h3>
                    <p>
                        Regular counseling, training workshops,
                        and support groups for families.
                    </p>
                </div>

            </div>

        </div>

        {{-- Bottom Wave Divider --}}
        <div class="absolute bottom-0 left-0 w-full overflow-hidden leading-[0] z-20">
            <svg viewBox="0 0 1200 120" preserveAspectRatio="none" class="relative block w-[calc(100%+1.3px)] h-[40px] lg:h-[70px]">
                <path d="M321.39,56.44c58-10.79,114.16-30.13,172-41.86,82.39-16.72,168.19-17.73,250.45-.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V120H0V0C41.67,11.39,119.33,31,179,42.41,234.19,53,281.42,63.74,321.39,56.44Z" fill="#ffffff"></path>
            </svg>
        </div>
    </section>

    <style>
        .why-section {
            background: #97B41A;
            position: relative;
        }

        /* floating playful shapes */

        .floating-shape {
            position: absolute;
            border-radius: 50%;
            opacity: 0.25;
            animation: floatShape 8s infinite ease-in-out;
        }

        .shape1 {
            width: 180px;
            height: 180px;
            background: #ffffff;
            top: -40px;
            left: -40px;
        }

        .shape2 {
            width: 120px;
            height: 120px;
            background: #FFD54F;
            bottom: 40px;
            right: 10%;
            animation-delay: 2s;
        }

        .shape3 {
            width: 90px;
            height: 90px;
            background: #EA6F71;
            top: 40%;
            left: 5%;
            animation-delay: 4s;
        }

        @keyframes floatShape {

            0%,
            100% {
                transform: translateY(0)
            }

            50% {
                transform: translateY(-25px)
            }
        }


        /* cards */

        .why-card-premium {
            background: white;
            padding: 35px;
            border-radius: 24px;
            box-shadow: 0 15px 40px rgba(0, 0, 0, 0.12);
            transition: 0.4s;
            text-align: left;
            position: relative;
            overflow: hidden;
        }

        .why-card-premium:hover {
            transform: translateY(-12px) scale(1.03);
            box-shadow: 0 25px 60px rgba(0, 0, 0, 0.18);
        }

        /* icon */

        .icon-box {
            width: 60px;
            height: 60px;
            border-radius: 16px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 26px;
            color: white;
            margin-bottom: 18px;
        }

        /* title */

        .why-card-premium h3 {
            font-family: 'Fredoka', sans-serif;
            font-weight: 700;
            font-size: 22px;
            margin-bottom: 10px;
            color: #1a1a1a;
        }

        /* text */

        .why-card-premium p {
            font-size: 14px;
            color: #6b7280;
            line-height: 1.6;
        }
    </style>

    {{-- ================= TESTIMONIALS ================= --}}
    <section class="py-16 lg:py-24 relative overflow-hidden bg-white">
        <div class="doodle-bg-dark"></div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <h2 class="text-3xl sm:text-4xl font-bold text-center mb-16 text-transparent bg-clip-text"
                style="background-image: linear-gradient(to right, #00A79D, #EA6F71); -webkit-background-clip: text; -webkit-text-fill-color: transparent;"
                data-aos="fade-up">
                Stories of Hope & Success
            </h2>

            <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8">
                {{-- Testimonial 1 --}}
                <div class="p-8 transform hover:-translate-y-2 transition-all duration-300 flex flex-col h-full border"
                    style="background-color: rgba(50, 168, 184, 0.05); border-color: rgba(50, 168, 184, 0.2); border-radius: 60px 20px 60px 20px;"
                    data-aos="fade-up" data-aos-delay="100">
                    <div class="flex gap-1 mb-4" style="color: #32A8B8;">★★★★★</div>
                    <p class="text-gray-700 italic mb-6 flex-grow">
                        "We are extremely happy with the therapy services provide by gems clinic. We have seen a remarkable
                        improvement in our child over time. He has started trying to speak, his hyperactivity has reduced
                        significantly, and his eye contact with people has improved a lot"
                    </p>
                    <div class="flex items-center gap-4">
                        <div
                            class="w-10 h-10 bg-white text-[#32A8B8] rounded-full flex items-center justify-center font-bold shadow-sm border border-gray-100">
                            HS</div>
                        <div>
                            <div class="font-semibold text-gray-900">Hasna Kp</div>
                            <div class="text-gray-500 text-xs text-left">Parent</div>
                        </div>
                    </div>
                </div>

                {{-- Testimonial 2 --}}
                <div class="p-8 transform hover:-translate-y-2 transition-all duration-300 flex flex-col h-full border"
                    style="background-color: rgba(151, 180, 26, 0.05); border-color: rgba(151, 180, 26, 0.2); border-radius: 20px 60px 20px 60px;"
                    data-aos="fade-up" data-aos-delay="200">
                    <div class="flex gap-1 mb-4" style="color: #97B41A;">★★★★★</div>
                    <p class="text-gray-700 italic mb-6 flex-grow">
                        "One of the best child development centres in Calicut! Only after reaching here did I truly feel
                        that my son has received the right guidance and support. The staff are very professional, caring,
                        and patient."
                    </p>
                    <div class="flex items-center gap-4">
                        <div
                            class="w-10 h-10 bg-white text-[#97B41A] rounded-full flex items-center justify-center font-bold shadow-sm border border-gray-100">
                            FA</div>
                        <div>
                            <div class="font-semibold text-gray-900">Fathima va.</div>
                            <div class="text-gray-500 text-xs text-left">Parent</div>
                        </div>
                    </div>
                </div>

                {{-- Testimonial 3 --}}
                <div class="p-8 transform hover:-translate-y-2 transition-all duration-300 flex flex-col h-full border"
                    style="background-color: rgba(234, 111, 113, 0.05); border-color: rgba(234, 111, 113, 0.2); border-radius: 60px 20px 60px 20px;"
                    data-aos="fade-up" data-aos-delay="300">
                    <div class="flex gap-1 mb-4" style="color: #EA6F71;">★★★★★</div>
                    <p class="text-gray-700 italic mb-6 flex-grow">
                        "The best therapy centre for developmental delayed kids. Excellent teaching and skill development
                        methods using Kids are very happy because of friendly atmosphere."
                    </p>
                    <div class="flex items-center gap-4">
                        <div
                            class="w-10 h-10 bg-white text-[#EA6F71] rounded-full flex items-center justify-center font-bold shadow-sm border border-gray-100">
                            AM</div>
                        <div>
                            <div class="font-semibold text-gray-900">Aneesh meladath.</div>
                            <div class="text-gray-500 text-xs text-left">Parent</div>
                        </div>
                    </div>
                </div>

                {{-- Testimonial 4 --}}
                <div class="p-8 transform hover:-translate-y-2 transition-all duration-300 flex flex-col h-full border"
                    style="background-color: rgba(233, 157, 29, 0.05); border-color: rgba(233, 157, 29, 0.2); border-radius: 20px 60px 20px 60px;"
                    data-aos="fade-up" data-aos-delay="400">
                    <div class="flex gap-1 mb-4" style="color: #E99D1D;">★★★★★</div>
                    <p class="text-gray-700 italic mb-6 flex-grow">
                        "Truly grateful for the progress we've seen. The staff is like family. They've supported us as much
                        as they've supported our son. Excellent environment."
                    </p>
                    <div class="flex items-center gap-4">
                        <div
                            class="w-10 h-10 bg-white text-[#E99D1D] rounded-full flex items-center justify-center font-bold shadow-sm border border-gray-100">
                            RK</div>
                        <div>
                            <div class="font-semibold text-gray-900">Rahul K.</div>
                            <div class="text-gray-500 text-xs text-left">Parent</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- ================= FAQ SECTION ================= --}}
    <section class="py-16 lg:py-24 bg-white relative overflow-hidden">
        <div class="doodle-bg-dark"></div>
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
            <h2 class="text-3xl sm:text-4xl font-bold text-center text-gray-900 mb-12" data-aos="fade-up">Frequently Asked
                Questions</h2>

            <div class="space-y-4" data-aos="fade-up">
                <details class="bg-white rounded-xl shadow-sm overflow-hidden group">
                    <summary class="flex items-center justify-between p-6 cursor-pointer list-none">
                        <h3 class="font-semibold text-lg text-gray-900">How do I know if my child needs therapy?</h3>
                        <span class="text-teal-500 text-2xl group-open:rotate-45 transition-transform duration-300">+</span>
                    </summary>
                    <div class="px-6 pb-6 text-gray-600">
                        If you notice delays in speech, motor skills, social interaction, or behavior compared to other
                        children of the same age, it's best to consult a professional. Early intervention yields the best
                        results.
                    </div>
                </details>

                <details class="bg-white rounded-xl shadow-sm overflow-hidden group">
                    <summary class="flex items-center justify-between p-6 cursor-pointer list-none">
                        <h3 class="font-semibold text-lg text-gray-900">Do you offer online consultations?</h3>
                        <span class="text-teal-500 text-2xl group-open:rotate-45 transition-transform duration-300">+</span>
                    </summary>
                    <div class="px-6 pb-6 text-gray-600">
                        Yes, we offer tele-therapy and online parent counseling sessions for families who cannot visit our
                        center physically.
                    </div>
                </details>

                <details class="bg-white rounded-xl shadow-sm overflow-hidden group">
                    <summary class="flex items-center justify-between p-6 cursor-pointer list-none">
                        <h3 class="font-semibold text-lg text-gray-900">What ages do you treat?</h3>
                        <span class="text-teal-500 text-2xl group-open:rotate-45 transition-transform duration-300">+</span>
                    </summary>
                    <div class="px-6 pb-6 text-gray-600">
                        We work with children from infancy (Early Intervention) up to adolescence (18 years), providing
                        age-appropriate therapies and support.
                    </div>
                </details>
            </div>
        </div>
    </section>

    {{-- ================= FINAL CTA ================= --}}
    <section class="py-20 bg-white relative overflow-hidden">
        <div class="doodle-bg-dark"></div>
        <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="rounded-3xl p-8 sm:p-16 text-center text-white relative overflow-hidden shadow-2xl"
                style="background-color: #EA6F71;" data-aos="zoom-in">
                <div class="doodle-bg-light"></div>
                <div class="absolute top-0 right-0 w-64 h-64 bg-white/10 rounded-full -translate-y-1/2 translate-x-1/2">
                </div>
                <div class="absolute bottom-0 left-0 w-40 h-40 bg-white/10 rounded-full translate-y-1/2 -translate-x-1/2">
                </div>

                <div class="relative z-10">
                    <h2 class="text-3xl sm:text-4xl font-bold mb-6">Take the First Step Today</h2>
                    <p class="text-lg text-white/90 mb-10 max-w-2xl mx-auto">
                        Your child's potential is limitless. Let us help them unlock it. Schedule an assessment with our
                        experts.
                    </p>
                    <div class="flex flex-col sm:flex-row gap-4 justify-center">
                        <a href="/contact"
                            class="bg-white text-teal-600 font-bold px-8 py-4 rounded-xl hover:bg-gray-100 transition-colors shadow-lg">
                            Book Appointment
                        </a>
                        <a href="tel:+917994502501"
                            class="bg-transparent border-2 border-white text-white font-bold px-8 py-4 rounded-xl hover:bg-white/10 transition-colors">
                            Call +91 7994502501
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection