@extends('layouts.app')

@section('title', 'Contact Us | AIMS CDC')

@section('content')
{{-- ================= HERO SECTION ================= --}}
<section class="bg-gray-900 py-20 relative overflow-hidden">
    <div class="absolute inset-0 bg-gradient-to-r from-teal-900 to-gray-900 opacity-90"></div>
    <div class="absolute inset-0 bg-[url('https://www.transparenttextures.com/patterns/cubes.png')] opacity-10"></div>
    
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 text-center">
        <h1 class="text-4xl sm:text-5xl font-bold text-white mb-6" data-aos="fade-up">
            Get in Touch
        </h1>
        <p class="text-xl text-teal-100 max-w-2xl mx-auto" data-aos="fade-up" data-aos-delay="100">
            We are here to answer your questions and help you find the best path for your child.
        </p>
    </div>
</section>

{{-- ================= CONTACT CONTENT ================= --}}
<section class="py-16 lg:py-24 bg-gray-50 relative">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="grid lg:grid-cols-3 gap-8 lg:gap-12">
            
            {{-- Contact Info Cards --}}
            <div class="lg:col-span-1 space-y-6">
                {{-- Address --}}
                <div class="bg-white p-6 rounded-2xl shadow-lg hover:shadow-xl transition-shadow" data-aos="fade-right">
                    <div class="w-12 h-12 bg-teal-100 text-teal-600 rounded-xl flex items-center justify-center text-2xl mb-4">📍</div>
                    <h3 class="font-bold text-gray-900 text-lg mb-2">Visit Us</h3>
                    <p class="text-gray-600 leading-relaxed">
                        GEMS Child Development Centre<br>
                        Pallipatu Ayyapa Temple Road
Civil Station,<br>
                        Kozhikode, Kerala, India - 673020
                    </p>
                </div>
                
                {{-- Phone --}}
                <div class="bg-white p-6 rounded-2xl shadow-lg hover:shadow-xl transition-shadow" data-aos="fade-right" data-aos-delay="100">
                    <div class="w-12 h-12 bg-pink-100 text-pink-600 rounded-xl flex items-center justify-center text-2xl mb-4">📞</div>
                    <h3 class="font-bold text-gray-900 text-lg mb-2">Call Us</h3>
                    <p class="text-gray-600 mb-3">Mon-Sat from 9am to 6pm</p>
                    <a href="tel:+918891810022" class="text-lg font-bold text-teal-600 hover:text-teal-700 block">+91 88918 10022</a>
                    <a href="tel:+918589000000" class="text-lg font-bold text-teal-600 hover:text-teal-700 block">+91 85890 00000</a>
                </div>
                
                {{-- Email --}}
                <div class="bg-white p-6 rounded-2xl shadow-lg hover:shadow-xl transition-shadow" data-aos="fade-right" data-aos-delay="200">
                    <div class="w-12 h-12 bg-blue-100 text-blue-600 rounded-xl flex items-center justify-center text-2xl mb-4">✉️</div>
                    <h3 class="font-bold text-gray-900 text-lg mb-2">Email Us</h3>
                    <p class="text-gray-600 mb-3">We reply within 24 hours</p>
                    <a href="mailto:info@aimscdc.com" class="text-lg font-bold text-teal-600 hover:text-teal-700">info@aimscdc.com</a>
                </div>
            </div>
            
            {{-- Contact Form --}}
            <div class="lg:col-span-2" data-aos="fade-left">
                <div class="bg-white rounded-3xl shadow-xl p-8 sm:p-12 overflow-hidden relative">
                    <div class="absolute top-0 right-0 w-40 h-40 bg-teal-50 rounded-bl-full -z-0"></div>
                    
                    <h2 class="text-3xl font-bold text-gray-900 mb-2 relative z-10">Send a Message</h2>
                    <p class="text-gray-600 mb-8 relative z-10">Fill out the form below and we'll get back to you shortly.</p>
                    
                    <form action="#" method="POST" class="space-y-6 relative z-10">
                        @csrf
                        <div class="grid sm:grid-cols-2 gap-6">
                            <div class="space-y-2">
                                <label for="name" class="text-sm font-semibold text-gray-700">Your Name</label>
                                <input type="text" id="name" name="name" required class="w-full px-4 py-3 rounded-xl border border-gray-200 focus:border-teal-500 focus:ring-2 focus:ring-teal-200 transition-all outline-none" placeholder="John Doe">
                            </div>
                            <div class="space-y-2">
                                <label for="phone" class="text-sm font-semibold text-gray-700">Phone Number</label>
                                <input type="tel" id="phone" name="phone" required class="w-full px-4 py-3 rounded-xl border border-gray-200 focus:border-teal-500 focus:ring-2 focus:ring-teal-200 transition-all outline-none" placeholder="+91 99999 99999">
                            </div>
                        </div>
                        
                        <div class="space-y-2">
                            <label for="email" class="text-sm font-semibold text-gray-700">Email Address</label>
                            <input type="email" id="email" name="email" required class="w-full px-4 py-3 rounded-xl border border-gray-200 focus:border-teal-500 focus:ring-2 focus:ring-teal-200 transition-all outline-none" placeholder="john@example.com">
                        </div>
                        
                        <div class="space-y-2">
                            <label for="service" class="text-sm font-semibold text-gray-700">Interested Service</label>
                            <select id="service" name="service" class="w-full px-4 py-3 rounded-xl border border-gray-200 focus:border-teal-500 focus:ring-2 focus:ring-teal-200 transition-all outline-none bg-white">
                                <option value="" disabled selected>Select a service</option>
                                <option value="speech">Speech Therapy</option>
                                <option value="occupational">Occupational Therapy</option>
                                <option value="behavioral">Behavioral Therapy</option>
                                <option value="special_education">Special Education</option>
                                <option value="psychology">Child Psychology</option>
                                <option value="other">Other / General Inquiry</option>
                            </select>
                        </div>
                        
                        <div class="space-y-2">
                            <label for="message" class="text-sm font-semibold text-gray-700">Message</label>
                            <textarea id="message" name="message" rows="4" required class="w-full px-4 py-3 rounded-xl border border-gray-200 focus:border-teal-500 focus:ring-2 focus:ring-teal-200 transition-all outline-none resize-none" placeholder="How can we help you?"></textarea>
                        </div>
                        
                        <button type="submit" class="w-full bg-gradient-to-r from-teal-600 to-teal-500 text-white font-bold py-4 rounded-xl shadow-lg hover:shadow-xl hover:translate-y-[-2px] transition-all duration-300">
                            Send Message
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- ================= MAP SECTION ================= --}}
<section class="h-[400px] w-full bg-gray-200 relative">
    {{-- Placeholder for Google Maps --}}
    <iframe 
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3929.0!2d76.3!3d10.0!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMTDCsDAwJzAwLjAiTiA3NsKwMTgnMDAuMCJF!5e0!3m2!1sen!2sin!4v1635000000000!5m2!1sen!2sin" 
        width="100%" 
        height="100%" 
        class="border-0 filter grayscale hover:grayscale-0 transition-all duration-500" 
        allowfullscreen="" 
        loading="lazy">
    </iframe>
</section>
@endsection
