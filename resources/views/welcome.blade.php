@extends('layouts.app')

@section('title', 'Home')

@section('content')
<div class="container mx-auto px-4 py-8">
    <!-- Section: Line Chart -->
    <div class="flex flex-col items-center">
        <img
            src="https://web.bookyourinsurance.com/wp-content/uploads/2024/09/Lines.png"
            alt="Line Chart"
            class="w-full max-w-md animate-slide-in-left"
        />
    </div>

    <!-- Section: Dedicated Claims Support -->
    <div class="bg-green-100 py-6 px-4 mt-8 animate-slide-in-left">
        <h5 class="text-blue-600 text-sm font-semibold">Get Dedicated Claims Support</h5>
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 mt-4">
            <div>
                <h2 class="text-4xl text-blue-900 font-bold leading-tight">
                    We Are Your One-stop <br />
                    Insurance Destination
                </h2>
            </div>
            <div>
                <p class="text-lg text-blue-900">
                    We help you choose the best insurance coverage plans for your unique needs so
                    you can focus on what matters! Get expert advice & personalized solutions with
                    Book Your Insurance!
                </p>
            </div>
        </div>
    </div>

    <!-- Section: Cards -->
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8 mt-8">
        <!-- Card 1 -->
        <div class="p-6 border rounded-lg shadow-md hover:shadow-lg transition-all animate-slide-in-left">
            <img
                src="https://web.bookyourinsurance.com/wp-content/uploads/2024/09/low-cost-1.png"
                alt="Low Cost"
                class="w-24 h-24 mx-auto"
            />
            <h3 class="text-center text-lg font-semibold mt-4">Incredibly Low Prices</h3>
            <p class="text-center text-gray-600">
                We offer the prices that fit your budget by providing the best value and coverage.
            </p>
        </div>

        <!-- Card 2 -->
        <div class="p-6 border rounded-lg shadow-md hover:shadow-lg transition-all animate-slide-in-left">
            <img
                src="https://web.bookyourinsurance.com/wp-content/uploads/2024/09/news-1.png"
                alt="Convenient"
                class="w-24 h-24 mx-auto"
            />
            <h3 class="text-center text-lg font-semibold mt-4">Terribly Convenient</h3>
            <p class="text-center text-gray-600">
                Our reliable portal & application services help you manage your insurance effortlessly.
            </p>
        </div>

        <!-- Card 3 -->
        <div class="p-6 border rounded-lg shadow-md hover:shadow-lg transition-all animate-slide-in-left">
            <img
                src="https://web.bookyourinsurance.com/wp-content/uploads/2024/09/claim-1.png"
                alt="Zero-hassle Claims"
                class="w-24 h-24 mx-auto"
            />
            <h3 class="text-center text-lg font-semibold mt-4">Zero-hassle Claims</h3>
            <p class="text-center text-gray-600">
                Our quick and stress-free claims process simplifies everything for you!
            </p>
        </div>
    </div>

    <!-- Section: 4-Step Process -->
    <div class="bg-blue-50 py-6 px-4 mt-8 rounded-lg animate-slide-in-left">
        <h2 class="text-3xl font-bold text-blue-900 text-center">
            Know Our Simple 4-Step Process
        </h2>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mt-6">
            <!-- Step 1 -->
            <div class="text-center">
                <img
                    src="https://web.bookyourinsurance.com/wp-content/uploads/2024/09/37plus_insurance-1.png"
                    alt="Choose Insurance"
                    class="w-20 h-20 mx-auto"
                />
                <h3 class="text-lg font-semibold mt-4">Choose Insurance</h3>
                <p class="text-gray-600">
                    Discover the available options and choose the most suitable insurance as per your budget.
                </p>
            </div>

            <!-- Step 2 -->
            <div class="text-center">
                <img
                    src="https://web.bookyourinsurance.com/wp-content/uploads/2024/09/quick_quotes-1.png"
                    alt="Submit Details"
                    class="w-20 h-20 mx-auto"
                />
                <h3 class="text-lg font-semibold mt-4">Submit Your Details</h3>
                <p class="text-gray-600">
                    We collect the required information to ensure an accurate and efficient process.
                </p>
            </div>

            <!-- Step 3 -->
            <div class="text-center">
                <img
                    src="https://web.bookyourinsurance.com/wp-content/uploads/2024/09/payment-method-1.png"
                    alt="Make Payment"
                    class="w-20 h-20 mx-auto"
                />
                <h3 class="text-lg font-semibold mt-4">Make Payment</h3>
                <p class="text-gray-600">
                    Complete secure online payment through our platform with utmost confidentiality.
                </p>
            </div>

            <!-- Step 4 -->
            <div class="text-center">
                <img
                    src="https://web.bookyourinsurance.com/wp-content/uploads/2024/09/Trustworthy-1.png"
                    alt="Get Insurance"
                    class="w-20 h-20 mx-auto"
                />
                <h3 class="text-lg font-semibold mt-4">Get Your Insurance</h3>
                <p class="text-gray-600">
                    Receive your policy documents via your preferred communication channels.
                </p>
            </div>
        </div>
    </div>
</div>









<div class="flex w-full justify-center bg-gray-100 py-12 px-4 sm:px-8">
    <!-- Left side: Image -->
    <div class="w-full sm:w-1/2 flex justify-center mb-8 sm:mb-0">
        <div class="relative w-full rounded-lg shadow-lg overflow-hidden">
            <img src="https://web.bookyourinsurance.com/wp-content/uploads/2024/09/Group-39946.png" class="w-full object-cover h-full" alt="Group">
        </div>
    </div>
    
    <!-- Right side: Text -->
    <div class="w-full sm:w-1/2 flex flex-col justify-center p-8 bg-white rounded-lg shadow-lg">
        <div class="text-[#09384d]">
            <h2 class="text-3xl sm:text-4xl font-bold mb-4">Get Trusted Solutions for Your Custom Insurance Needs!</h2>
            <p class="text-gray-800">
                Get simple, fast &amp; efficient insurance services online with Book Your Insurance! We provide a wide range of insurance products and services to meet your diverse needs. Our platform provides tailor-made insurance solutions for automobile, property, health, asset, pet, and bite-sized categories. We understand that insurance can be complex, so our team is always here to guide you at every step and provide you with clear, transparent information. Find the best coverage options for you only at Book Your Insurance! For more information, download the app today!
            </p>
        </div>

        <!-- Image Section for App Store and Google Play -->
        <div class="flex space-x-6 mt-8">
            <div class="w-1/2">
                <div class="flex justify-center">
                    <figure class="w-3/4">
                        <div class="vc_single_image-wrapper vc_box_border_grey">
                            <img src="https://web.bookyourinsurance.com/wp-content/uploads/2022/10/Apple-Store.png" alt="Apple Store" class="w-full object-contain" />
                        </div>
                    </figure>
                </div>
            </div>

            <div class="w-1/2">
                <div class="flex justify-center">
                    <figure class="w-3/4">
                        <div class="vc_single_image-wrapper vc_box_border_grey">
                            <img src="https://web.bookyourinsurance.com/wp-content/uploads/2022/10/Google-Play.png" alt="Google Play" class="w-full object-contain" />
                        </div>
                    </figure>
                </div>
            </div>
        </div>
    </div>
</div>


    <!-- Check Section -->
    <div class="vc_row wpb_row vc_row-fluid checkSecttionNew vc_custom_1725356961970 vc_row-has-fill mt-8">
        <div class="wpb_column vc_column_container vc_col-sm-12">
            <div class="vc_column-inner">
                <div class="wpb_wrapper">
                    <div class="fullImg">
                        <div class="imgSectionCheck flex items-center mb-4">
                            <img class="w-12 h-auto mr-4" src="https://web.bookyourinsurance.com/wp-content/uploads/2024/09/Checkmark.png" alt="Checkmark" />
                            <p class="lastText text-lg sm:text-xl">Compare different insurance policies</p>
                        </div>
                        <div class="imgSectionCheck flex items-center mb-4">
                            <img class="w-12 h-auto mr-4" src="https://web.bookyourinsurance.com/wp-content/uploads/2024/09/Checkmark.png" alt="Checkmark" />
                            <p class="lastText text-lg sm:text-xl">Download your policy with a single tap</p>
                        </div>
                        <div class="imgSectionCheck flex items-center mb-4">
                            <img class="w-12 h-auto mr-4" src="https://web.bookyourinsurance.com/wp-content/uploads/2024/09/Checkmark.png" alt="Checkmark" />
                            <p class="lastText text-lg sm:text-xl">Buy, store and share all your policies</p>
                        </div>
                        <div class="imgSectionCheck flex items-center mb-4">
                            <img class="w-12 h-auto mr-4" src="https://web.bookyourinsurance.com/wp-content/uploads/2024/09/Checkmark.png" alt="Checkmark" />
                            <p class="lastText text-lg sm:text-xl">Get dedicated call &amp; email support</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



@endsection