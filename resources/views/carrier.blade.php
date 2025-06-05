@extends('front-layouts.main')

@section('content')
    <!-- ***** page heading section start ***** -->
    <section class="breadcrumb-section relative md:mb-28 mb-24 lg:pt-52 md:pt-48 pt-32 pb-10 bg-[url('/assets/img/breadcrumb-bg1.png'),_linear-gradient(180deg,_#121212_0%,_#121212_100%)] bg-cover bg-center">
        <div class="container xl:px-[18px] md:px-4 px-3.5 mx-auto">
            <div class="relative">
                <div class="">
                    <ul class="inline-flex rounded-full border border-stone-600 md:gap-3 gap-2.5 py-2 md:px-6 px-5">
                        <li class="text-theme2 text-sm"><a href="/">Home</a></li>
                        <li class="text-white relative text-sm before:content-[''] before:w-[8px] before:h-[2px] before:left-0 before:top-1/2 before:-translate-y-1/2 before:bg-white before:absolute pl-5">Career</li>
                    </ul>
                    <h1 class="text-white font-bold md:mt-6 mt-4 lg:text-[42px] md:text-[38px] sm:text-[32px] text-[22px] max-md:leading-[40px]">Build Your Career with Logicvine Infotech</h1>
                </div>
                <div class="md:mt-12 sm:mt-10 mt-4 flex items-center justify-center animate-up-down2">
                    <a href="javascript:;" id="scrollbtn" class="border border-[#ffffff80] sm:py-6 py-5 md:px-2.5 px-2 rounded-full">
                        <svg xmlns="http://www.w3.org/2000/svg" class="stroke-[#ffffff80] sm:h-[29px] h-[24px]" fill="none" viewBox="0 0 19 29">
                            <path d="M9.5 0V28M9.5 28C10 24.3333 12.4 17.1 18 17.5M9.5 28C8.5 24.1667 5.4 16.7 1 17.5"></path>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** page heading section end ***** -->

    <!-- ***** Benefits Section Start ***** -->
    <section class="relative md:mb-28 mb-24">
        <div class="container xl:px-[18px] md:px-4 px-3.5 mx-auto">
            <div class="text-center mb-16">
                <h2 class="font-bold lg:text-[42px] md:text-[38px] sm:text-[32px] text-[22px] mb-4">Employee Benefits</h2>
                <p class="text-lg text-gray-600 max-w-3xl mx-auto">We believe in taking care of our team members with comprehensive benefits that support their professional and personal growth.</p>
            </div>
            
            <div class="grid lg:grid-cols-4 md:grid-cols-2 grid-cols-1 gap-8">
                <!-- Benefit 1 -->
                <div class="bg-white p-8 rounded-xl shadow-lg hover:shadow-xl transition-all duration-300 border border-gray-100">
                    <div class="w-16 h-16 bg-theme2/10 rounded-full flex items-center justify-center mb-6">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-theme2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold mb-3">Career Growth</h3>
                    <p class="text-gray-600">Structured career paths with regular training and mentorship programs to help you grow professionally.</p>
                </div>
                
                <!-- Benefit 2 -->
                <div class="bg-white p-8 rounded-xl shadow-lg hover:shadow-xl transition-all duration-300 border border-gray-100">
                    <div class="w-16 h-16 bg-theme2/10 rounded-full flex items-center justify-center mb-6">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-theme2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold mb-3">Competitive Salary</h3>
                    <p class="text-gray-600">Industry-standard compensation packages with regular performance-based appraisals and bonuses.</p>
                </div>
                
                <!-- Benefit 3 -->
                <div class="bg-white p-8 rounded-xl shadow-lg hover:shadow-xl transition-all duration-300 border border-gray-100">
                    <div class="w-16 h-16 bg-theme2/10 rounded-full flex items-center justify-center mb-6">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-theme2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-6 9l2 2 4-4" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold mb-3">Health Benefits</h3>
                    <p class="text-gray-600">Comprehensive health insurance for you and your family, along with wellness programs.</p>
                </div>
                
                <!-- Benefit 4 -->
                <div class="bg-white p-8 rounded-xl shadow-lg hover:shadow-xl transition-all duration-300 border border-gray-100">
                    <div class="w-16 h-16 bg-theme2/10 rounded-full flex items-center justify-center mb-6">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-theme2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold mb-3">Flexible Work</h3>
                    <p class="text-gray-600">Flexible work hours and remote work options to help you maintain work-life balance.</p>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Benefits Section End ***** -->

    <!-- ***** Why Choose Us Section Start ***** -->
    <section class="relative md:mb-28 mb-24 bg-gray-50 py-16">
        <div class="container xl:px-[18px] md:px-4 px-3.5 mx-auto">
            <div class="text-center mb-16">
                <h2 class="font-bold lg:text-[42px] md:text-[38px] sm:text-[32px] text-[22px] mb-4">Why Choose Logicvine?</h2>
                <p class="text-lg text-gray-600 max-w-3xl mx-auto">We're more than just a workplace - we're a community of innovators and problem-solvers.</p>
            </div>
            
            <div class="grid lg:grid-cols-3 md:grid-cols-2 grid-cols-1 gap-8">
                <!-- Reason 1 -->
                <div class="bg-white p-8 rounded-xl shadow-lg hover:shadow-xl transition-all duration-300 border border-gray-100">
                    <div class="flex items-center mb-6">
                        <div class="w-12 h-12 bg-theme2/10 rounded-full flex items-center justify-center mr-4">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-theme2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z" />
                            </svg>
                        </div>
                        <h3 class="text-xl font-semibold">Innovative Culture</h3>
                    </div>
                    <p class="text-gray-600">We foster a culture of innovation where new ideas are encouraged and rewarded. Our teams work on cutting-edge technologies.</p>
                </div>
                
                <!-- Reason 2 -->
                <div class="bg-white p-8 rounded-xl shadow-lg hover:shadow-xl transition-all duration-300 border border-gray-100">
                    <div class="flex items-center mb-6">
                        <div class="w-12 h-12 bg-theme2/10 rounded-full flex items-center justify-center mr-4">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-theme2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                            </svg>
                        </div>
                        <h3 class="text-xl font-semibold">Great Team</h3>
                    </div>
                    <p class="text-gray-600">Work with some of the brightest minds in the industry who are passionate about technology and solving complex problems.</p>
                </div>
                
                <!-- Reason 3 -->
                <div class="bg-white p-8 rounded-xl shadow-lg hover:shadow-xl transition-all duration-300 border border-gray-100">
                    <div class="flex items-center mb-6">
                        <div class="w-12 h-12 bg-theme2/10 rounded-full flex items-center justify-center mr-4">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-theme2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                            </svg>
                        </div>
                        <h3 class="text-xl font-semibold">Learning Opportunities</h3>
                    </div>
                    <p class="text-gray-600">Regular training sessions, tech talks, and access to premium learning resources to keep your skills sharp.</p>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Why Choose Us Section End ***** -->

    <!-- ***** Job Openings Section Start ***** -->
    <section class="relative md:mb-28 mb-24">
        <div class="container xl:px-[18px] md:px-4 px-3.5 mx-auto">
            <div class="text-center mb-16">
                <h2 class="font-bold lg:text-[42px] md:text-[38px] sm:text-[32px] text-[22px] mb-4">Current Openings</h2>
                <p class="text-lg text-gray-600 max-w-3xl mx-auto">Explore our current job opportunities and find the perfect fit for your skills and aspirations.</p>
            </div>
            
            <div class="max-w-4xl mx-auto">
                <!-- Job 1 -->
                <div class="bg-white rounded-xl shadow-lg hover:shadow-xl transition-all duration-300 border border-gray-100 mb-6 overflow-hidden">
                    <div class="md:flex items-center justify-between p-6">
                        <div class="md:w-2/3 mb-4 md:mb-0">
                            <h3 class="text-xl font-semibold text-gray-800 mb-2">Senior PHP Developer</h3>
                            <div class="flex flex-wrap gap-2">
                                <span class="text-sm bg-gray-100 px-3 py-1 rounded-full">Full-time</span>
                                <span class="text-sm bg-gray-100 px-3 py-1 rounded-full">Ahmedabad</span>
                                <span class="text-sm bg-gray-100 px-3 py-1 rounded-full">5+ Years Exp</span>
                            </div>
                        </div>
                        <div class="md:w-1/3 text-right">
                            <button onclick="openModal('Senior PHP Developer')" class="bg-theme2 hover:bg-theme2/90 text-white font-medium py-2.5 px-6 rounded-lg transition-all duration-300">
                                Apply Now
                            </button>
                        </div>
                    </div>
                </div>
                
                <!-- Job 2 -->
                <div class="bg-white rounded-xl shadow-lg hover:shadow-xl transition-all duration-300 border border-gray-100 mb-6 overflow-hidden">
                    <div class="md:flex items-center justify-between p-6">
                        <div class="md:w-2/3 mb-4 md:mb-0">
                            <h3 class="text-xl font-semibold text-gray-800 mb-2">Frontend Developer (React)</h3>
                            <div class="flex flex-wrap gap-2">
                                <span class="text-sm bg-gray-100 px-3 py-1 rounded-full">Full-time</span>
                                <span class="text-sm bg-gray-100 px-3 py-1 rounded-full">Remote</span>
                                <span class="text-sm bg-gray-100 px-3 py-1 rounded-full">3+ Years Exp</span>
                            </div>
                        </div>
                        <div class="md:w-1/3 text-right">
                            <button onclick="openModal('Frontend Developer (React)')" class="bg-theme2 hover:bg-theme2/90 text-white font-medium py-2.5 px-6 rounded-lg transition-all duration-300">
                                Apply Now
                            </button>
                        </div>
                    </div>
                </div>
                
                <!-- Job 3 -->
                <div class="bg-white rounded-xl shadow-lg hover:shadow-xl transition-all duration-300 border border-gray-100 mb-6 overflow-hidden">
                    <div class="md:flex items-center justify-between p-6">
                        <div class="md:w-2/3 mb-4 md:mb-0">
                            <h3 class="text-xl font-semibold text-gray-800 mb-2">UI/UX Designer</h3>
                            <div class="flex flex-wrap gap-2">
                                <span class="text-sm bg-gray-100 px-3 py-1 rounded-full">Full-time</span>
                                <span class="text-sm bg-gray-100 px-3 py-1 rounded-full">Ahmedabad</span>
                                <span class="text-sm bg-gray-100 px-3 py-1 rounded-full">2+ Years Exp</span>
                            </div>
                        </div>
                        <div class="md:w-1/3 text-right">
                            <button onclick="openModal('UI/UX Designer')" class="bg-theme2 hover:bg-theme2/90 text-white font-medium py-2.5 px-6 rounded-lg transition-all duration-300">
                                Apply Now
                            </button>
                        </div>
                    </div>
                </div>
                
                <!-- Job 4 -->
                <div class="bg-white rounded-xl shadow-lg hover:shadow-xl transition-all duration-300 border border-gray-100 mb-6 overflow-hidden">
                    <div class="md:flex items-center justify-between p-6">
                        <div class="md:w-2/3 mb-4 md:mb-0">
                            <h3 class="text-xl font-semibold text-gray-800 mb-2">Business Development Executive</h3>
                            <div class="flex flex-wrap gap-2">
                                <span class="text-sm bg-gray-100 px-3 py-1 rounded-full">Full-time</span>
                                <span class="text-sm bg-gray-100 px-3 py-1 rounded-full">Ahmedabad</span>
                                <span class="text-sm bg-gray-100 px-3 py-1 rounded-full">1+ Years Exp</span>
                            </div>
                        </div>
                        <div class="md:w-1/3 text-right">
                            <button onclick="openModal('Business Development Executive')" class="bg-theme2 hover:bg-theme2/90 text-white font-medium py-2.5 px-6 rounded-lg transition-all duration-300">
                                Apply Now
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Job Openings Section End ***** -->

    <!-- ***** Application Modal ***** -->
    <div id="applicationModal" class="fixed inset-0 bg-black bg-opacity-50 z-[60] hidden flex items-center justify-center p-3">
        <div class="bg-white rounded-xl max-w-2xl w-full max-h-[90vh] overflow-y-auto">
            <div class="p-6">
                <div class="flex justify-between items-center mb-6">
                    <h3 class="text-2xl font-bold text-gray-800" id="modalTitle">Apply for <span id="jobTitle"></span></h3>
                    <button onclick="closeModal()" class="text-gray-500 hover:text-gray-700">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>
                
                <form id="applicationForm" class="space-y-6">
                    <div class="grid md:grid-cols-2 gap-6">
                        <div>
                            <label for="name" class="block text-sm font-medium text-gray-700 mb-1">Full Name*</label>
                            <input type="text" id="name" name="name" required class="w-full px-4 py-2.5 border border-gray-300 rounded-lg focus:ring-2 focus:ring-theme2 focus:border-theme2 outline-none transition">
                        </div>
                        <div>
                            <label for="email" class="block text-sm font-medium text-gray-700 mb-1">Email*</label>
                            <input type="email" id="email" name="email" required class="w-full px-4 py-2.5 border border-gray-300 rounded-lg focus:ring-2 focus:ring-theme2 focus:border-theme2 outline-none transition">
                        </div>
                    </div>
                    
                    <div class="grid md:grid-cols-2 gap-6">
                        <div>
                            <label for="phone" class="block text-sm font-medium text-gray-700 mb-1">Phone Number*</label>
                            <input type="tel" id="phone" name="phone" required class="w-full px-4 py-2.5 border border-gray-300 rounded-lg focus:ring-2 focus:ring-theme2 focus:border-theme2 outline-none transition">
                        </div>
                        <div>
                            <label for="experience" class="block text-sm font-medium text-gray-700 mb-1">Years of Experience*</label>
                            <input type="number" id="experience" name="experience" required class="w-full px-4 py-2.5 border border-gray-300 rounded-lg focus:ring-2 focus:ring-theme2 focus:border-theme2 outline-none transition">
                        </div>
                    </div>
                    
                    <div>
                        <label for="resume" class="block text-sm font-medium text-gray-700 mb-1">Upload Resume (PDF only)*</label>
                        <div class="mt-1 flex justify-center px-6 pt-5 pb-6 border-2 border-gray-300 border-dashed rounded-lg">
                            <div class="space-y-1 text-center">
                                <svg class="mx-auto h-12 w-12 text-gray-400" stroke="currentColor" fill="none" viewBox="0 0 48 48" aria-hidden="true">
                                    <path d="M28 8H12a4 4 0 00-4 4v20m32-12v8m0 0v8a4 4 0 01-4 4H12a4 4 0 01-4-4v-4m32-4l-3.172-3.172a4 4 0 00-5.656 0L28 28M8 32l9.172-9.172a4 4 0 015.656 0L28 28m0 0l4 4m4-24h8m-4-4v8m-12 4h.02" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                                <div class="flex text-sm text-gray-600">
                                    <label for="file-upload" class="relative cursor-pointer bg-white rounded-md font-medium text-theme2 hover:text-theme2/80 focus-within:outline-none">
                                        <span>Upload a file</span>
                                        <input id="file-upload" name="file-upload" type="file" class="sr-only">
                                    </label>
                                    <p class="pl-1">or drag and drop</p>
                                </div>
                                <p class="text-xs text-gray-500">PDF up to 5MB</p>
                            </div>
                        </div>
                    </div>
                    
                    <div>
                        <label for="coverLetter" class="block text-sm font-medium text-gray-700 mb-1">Cover Letter (Optional)</label>
                        <textarea id="coverLetter" name="coverLetter" rows="4" class="w-full px-4 py-2.5 border border-gray-300 rounded-lg focus:ring-2 focus:ring-theme2 focus:border-theme2 outline-none transition"></textarea>
                    </div>
                    
                    <div class="flex items-center">
                        <input id="agreeTerms" name="agreeTerms" type="checkbox" required class="h-4 w-4 text-theme2 focus:ring-theme2 border-gray-300 rounded">
                        <label for="agreeTerms" class="ml-2 block text-sm text-gray-700">I agree to the <a href="#" class="text-theme2 hover:text-theme2/80">privacy policy</a> and <a href="#" class="text-theme2 hover:text-theme2/80">terms of service</a></label>
                    </div>
                    
                    <div class="pt-2">
                        <button type="submit" class="w-full bg-theme2 hover:bg-theme2/90 text-white font-medium py-2.5 px-6 rounded-lg transition-all duration-300">
                            Submit Application
                        </button>
                    </div>
                </form>
                
                <div class="mt-8 pt-6 border-t border-gray-200">
                    <h4 class="text-lg font-medium text-gray-800 mb-3">Alternatively, you can email us</h4>
                    <div class="flex items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-500 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                        </svg>
                        <a href="mailto:careers@logicvine.com" class="text-theme2 hover:text-theme2/80">careers@logicvine.com</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        function openModal(jobTitle) {
            document.getElementById('jobTitle').textContent = jobTitle;
            document.getElementById('applicationModal').classList.remove('hidden');
            document.body.style.overflow = 'hidden';
        }
        
        function closeModal() {
            document.getElementById('applicationModal').classList.add('hidden');
            document.body.style.overflow = 'auto';
        }
        
        document.getElementById('applicationForm').addEventListener('submit', function(e) {
            e.preventDefault();
            // Here you would typically handle the form submission via AJAX
            alert('Application submitted successfully! We will get back to you soon.');
            closeModal();
            this.reset();
        });
        
        // Close modal when clicking outside
        document.getElementById('applicationModal').addEventListener('click', function(e) {
            if (e.target === this) {
                closeModal();
            }
        });
    </script>
@endsection