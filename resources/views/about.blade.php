@extends('layouts.app')

@section('title', 'About')

@section('content')
<div class="bg-gray-100 py-10 px-6">
    <div class="container mx-auto">
        <h2 class="text-3xl font-bold text-blue-600 mb-4 text-center">Get To Know Us</h2>
        <p class="text-sm leading-relaxed text-gray-800">
            VProtectAll Insurance Broking Pvt. Ltd. is a direct broker (general and life insurance) company, committed to revolutionising insurance services since our establishment in 2021.
            We are an emerging insurance broking company in Central India, operating from Nagpur. We’re happily serving insurance services to a customer base of more than ten thousand and 50+ corporate clients.
            We have a dedicated team of claims and underwriting to handle the wide insurance services of clients as well as corporates. With a solid foundation and dynamic leadership, we stand as a beacon of trust, reliability, and excellent customer service.
        </p>
        <p class="text-sm leading-relaxed text-gray-800 mt-4">
            As your insurance service provider, we VProtectians take pride in transcending conventional boundaries by providing informed after-sales services.
            We offer a wide range of insurance plans at one click through our online portal ‘Book Your Insurance’. Our tailored pricing plans and diverse range of packages are designed to cater to specific needs and preferences.
            Our journey has been marked by strategic collaborations with all general, life, and health insurance companies, positioning us as a formidable partner in safeguarding what matters most to individuals and businesses.
            With a growing customer base and presence, we aim to give the best solutions to our clients and by the end of 2028, serve more than 50 lacs customers for insurance services!
        </p>
    </div>
</div>

<div class="bg-gray-50 py-10 px-6">
    <div class="container mx-auto">
        <!-- Section Title -->
        <h2 class="text-3xl font-bold text-blue-600 mb-4 text-center">Our Philosophy</h2>
        <p class="text-sm leading-relaxed text-gray-800 text-center mb-8">
            Our philosophy revolves around achieving growth by following the highest standards of integrity, honesty, passion, professionalism, and a fair code of conduct. We VProtectians are committed to being transparent and customer-centric. We value adaptability and continuous improvement, striving to stay updated with the industry trends. We view challenges as opportunities to serve better and grow. Our people are our strength, and we foster a culture of collaboration, respect, and excellence. Our philosophy guides us in forging lasting relationships and creating a positive impact on the lives we touch.
        </p>

        <!-- Cards Section -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
            <!-- Card 1 -->
            <div class="bg-white p-6 rounded-lg shadow-lg transform hover:scale-105 hover:shadow-xl transition duration-300 ease-in-out text-center">
                <i class="fas fa-shield-alt text-blue-600 text-4xl mb-4"></i>
                <h3 class="text-xl font-semibold text-blue-600 mb-4">Integrity</h3>
                <p class="text-gray-700">We uphold the highest standards of honesty and integrity in everything we do, ensuring that trust is the foundation of our relationships.</p>
            </div>
            <!-- Card 2 -->
            <div class="bg-white p-6 rounded-lg shadow-lg transform hover:scale-105 hover:shadow-xl transition duration-300 ease-in-out text-center">
                <i class="fas fa-users text-blue-600 text-4xl mb-4"></i>
                <h3 class="text-xl font-semibold text-blue-600 mb-4">Customer-Centric</h3>
                <p class="text-gray-700">We place our customers at the heart of everything, continuously striving to meet their evolving needs and exceeding their expectations.</p>
            </div>
            <!-- Card 3 -->
            <div class="bg-white p-6 rounded-lg shadow-lg transform hover:scale-105 hover:shadow-xl transition duration-300 ease-in-out text-center">
                <i class="fas fa-sync-alt text-blue-600 text-4xl mb-4"></i>
                <h3 class="text-xl font-semibold text-blue-600 mb-4">Adaptability</h3>
                <p class="text-gray-700">We embrace change and continuously evolve to stay ahead of the curve, ensuring that we are always prepared to meet new challenges.</p>
            </div>
            <!-- Card 4 -->
            <div class="bg-white p-6 rounded-lg shadow-lg transform hover:scale-105 hover:shadow-xl transition duration-300 ease-in-out text-center">
                <i class="fas fa-trophy text-blue-600 text-4xl mb-4"></i>
                <h3 class="text-xl font-semibold text-blue-600 mb-4">Excellence</h3>
                <p class="text-gray-700">We are committed to excellence in everything we do, pushing boundaries to ensure that every customer experience exceeds expectations.</p>
            </div>

        </div>
    </div>
</div>
<section class="container mx-auto mt-8 p-6">
    <!-- Title -->
    <div class="flex justify-center mb-6">
        <h2 class="text-2xl font-bold text-blue-900 border-b-4 border-blue-900 pb-2">Our Mission & Vision</h2>
    </div>

    <!-- Main Content -->
    <div class="flex flex-col md:flex-row items-center md:items-start gap-6">
        <!-- Left Half: Image -->
        <div class="w-full md:w-1/2">
            <img src="{{ asset('images/working.jpg') }}" alt="Mission & Vision Image"
                class="rounded-lg shadow-md w-full h-full object-cover">
        </div>

        <!-- Right Half: Cards -->
        <div class="w-full md:w-1/2 flex flex-col gap-4">
            <!-- Mission Card -->
            <div class="bg-white border border-gray-300 shadow-lg rounded-lg p-6 flex flex-col justify-between">
                <h3 class="text-lg font-semibold text-blue-900 mb-2">Mission</h3>
                <p class="text-sm text-gray-700">
                    Innovate for excellence. Empower individuals and communities to thrive with cutting-edge solutions.
                </p>
            </div>

            <!-- Vision Card -->
            <div class="bg-white border border-gray-300 shadow-lg rounded-lg p-6 flex flex-col justify-between">
                <h3 class="text-lg font-semibold text-blue-900 mb-2">Vision</h3>
                <p class="text-sm text-gray-700">
                    Create a sustainable future where innovation drives progress and makes a lasting impact on the world.
                </p>
            </div>
        </div>
    </div>
</section>


<section class="bg-gray-100 py-12">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Title Section -->
        <div class="text-center">
            <p class="text-xl font-semibold text-gray-700">Why Us?</p>
            <h2 class="text-3xl font-bold text-gray-900 pb-4">Trusted, Reliable, Secure, Comprehensive.</h2>
        </div>

        <!-- Accordion -->
        <div class="mt-8 space-y-4">
            <!-- Accordion Item 1 -->
            <div class="border rounded-lg shadow-sm">
                <button
                    class="w-full text-left px-6 py-4 text-lg font-medium text-gray-800 bg-gray-50 hover:bg-gray-100 rounded-lg flex justify-between items-center accordion-button"
                    type="button"
                    data-panel="panel-1">
                    Dedicated Claims Team
                    <svg
                        class="w-6 h-6 transform transition-transform duration-300 accordion-icon"
                        fill="none"
                        stroke="currentColor"
                        viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                    </svg>
                </button>
                <div
                    id="panel-1"
                    class="hidden px-6 py-4 text-gray-600 bg-white border-t rounded-b-lg accordion-panel">
                    <p>
                        Our team of seasoned professionals works to ensure that our
                        customers get a smooth claims experience. We provide value by
                        personalized touch and clear service details. From claim initiation
                        to addressing queries &amp; settlement, our team guides you
                        throughout the process.
                    </p>
                </div>
            </div>

            <!-- Accordion Item 2 -->
            <div class="border rounded-lg shadow-sm">
                <button
                    class="w-full text-left px-6 py-4 text-lg font-medium text-gray-800 bg-gray-50 hover:bg-gray-100 rounded-lg flex justify-between items-center accordion-button"
                    type="button"
                    data-panel="panel-2">
                    Tailor-made Insurance Solutions
                    <svg
                        class="w-6 h-6 transform transition-transform duration-300 accordion-icon"
                        fill="none"
                        stroke="currentColor"
                        viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                    </svg>
                </button>
                <div
                    id="panel-2"
                    class="hidden px-6 py-4 text-gray-600 bg-white border-t rounded-b-lg accordion-panel">
                    <p>
                        Recognizing that one size does not fit all, we pride ourselves on
                        offering customized insurance solutions. Our team members
                        understand your unique needs and craft policies that provide
                        precisely the coverage you require.
                    </p>
                </div>
            </div>

            <!-- Accordion Item 3 -->
            <div class="border rounded-lg shadow-sm">
                <button
                    class="w-full text-left px-6 py-4 text-lg font-medium text-gray-800 bg-gray-50 hover:bg-gray-100 rounded-lg flex justify-between items-center accordion-button"
                    type="button"
                    data-panel="panel-3">
                    Competitive Premiums With Highest Range of Coverage

                    <svg
                        class="w-6 h-6 transform transition-transform duration-300 accordion-icon"
                        fill="none"
                        stroke="currentColor"
                        viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                    </svg>
                </button>
                <div
                    id="panel-3"
                    class="hidden px-6 py-4 text-gray-600 bg-white border-t rounded-b-lg accordion-panel">
                    <p>
                        Enjoy the dual benefits of comprehensive coverage and competitive premiums. A VProtectAll Insurance Broking Pvt. Ltd,
                        we strive to provide value-driven insurance solutions, ensuring that you receive the best possible coverage.
                    </p>
                </div>
            </div>

            <!-- Accordion Item 4 -->
            <div class="border rounded-lg shadow-sm">
                <button
                    class="w-full text-left px-6 py-4 text-lg font-medium text-gray-800 bg-gray-50 hover:bg-gray-100 rounded-lg flex justify-between items-center accordion-button"
                    type="button"
                    data-panel="panel-4">
                    Proactive After-Sales Service
                    <svg
                        class="w-6 h-6 transform transition-transform duration-300 accordion-icon"
                        fill="none"
                        stroke="currentColor"
                        viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                    </svg>
                </button>
                <div
                    id="panel-4"
                    class="hidden px-6 py-4 text-gray-600 bg-white border-t rounded-b-lg accordion-panel">
                    <p>
                        To strengthen the bond of care and achieve a piece of mind,
                        we notify 1-3 designated family members upon the purchase of any policy.
                    </p>
                </div>
            </div>

            <!-- Accordion Item 5 -->
            <div class="border rounded-lg shadow-sm">
                <button
                    class="w-full text-left px-6 py-4 text-lg font-medium text-gray-800 bg-gray-50 hover:bg-gray-100 rounded-lg flex justify-between items-center accordion-button"
                    type="button"
                    data-panel="panel-5">
                    Transparent Communication
                    <svg
                        class="w-6 h-6 transform transition-transform duration-300 accordion-icon"
                        fill="none"
                        stroke="currentColor"
                        viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                    </svg>
                </button>
                <div
                    id="panel-5"
                    class="hidden px-6 py-4 text-gray-600 bg-white border-t rounded-b-lg accordion-panel">
                    <p>
                        Transparency is the bedrock of our communication. We believe in keeping you
                        informed at every stage – from policy details to claims processing. We focus on open communication
                        to ensure that you are always well-informed and satisfied in your insurance decisions.
                    </p>
                </div>
            </div>

            <!-- Accordion Item 6 -->
            <div class="border rounded-lg shadow-sm">
                <button
                    class="w-full text-left px-6 py-4 text-lg font-medium text-gray-800 bg-gray-50 hover:bg-gray-100 rounded-lg flex justify-between items-center accordion-button"
                    type="button"
                    data-panel="panel-6">
                    Adaptability
                    <svg
                        class="w-6 h-6 transform transition-transform duration-300 accordion-icon"
                        fill="none"
                        stroke="currentColor"
                        viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                    </svg>
                </button>
                <div
                    id="panel-6"
                    class="hidden px-6 py-4 text-gray-600 bg-white border-t rounded-b-lg accordion-panel">
                    <p>
                        To ensure customer satisfaction and efficient management,
                        we continuously focus on adapting our strategies, plans &amp; offerings, and technologies.
                    </p>
                </div>
            </div>


            <!-- Additional Accordion Items... -->
        </div>
</section>

<section class="bg-blue-50 py-12">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Title Section -->
        <div class="text-center mb-8">
            <h2 class="text-3xl font-bold text-blue-600">
                At a Glance &amp; Statistics
            </h2>
        </div>

        <!-- Stats Section -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
            <!-- Statistic Item 1 -->
            <div class="flex flex-col items-center text-center bg-white shadow rounded-lg p-6">
                <i class="fas fa-users text-blue-500 text-6xl mb-4"></i>
                <h3 class="text-lg font-semibold text-gray-800">Customer Base</h3>
                <span class="text-4xl font-bold text-blue-600 mt-2 count" data-target="10000">0</span>
                <p class="text-sm text-gray-500">+</p>
            </div>

            <!-- Statistic Item 2 -->
            <div class="flex flex-col items-center text-center bg-white shadow rounded-lg p-6">
                <i class="fas fa-handshake text-blue-500 text-6xl mb-4"></i>
                <h3 class="text-lg font-semibold text-gray-800">Partner Companies</h3>
                <span class="text-4xl font-bold text-blue-600 mt-2 count" data-target="22">0</span>
                <p class="text-sm text-gray-500">+</p>
            </div>

            <!-- Statistic Item 3 -->
            <div class="flex flex-col items-center text-center bg-white shadow rounded-lg p-6">
                <i class="fas fa-trophy text-blue-500 text-6xl mb-4"></i>
                <h3 class="text-lg font-semibold text-gray-800">Awards &amp; Recognitions</h3>
                <span class="text-4xl font-bold text-blue-600 mt-2 count" data-target="10">0</span>
                <p class="text-sm text-gray-500">+</p>
            </div>

            <!-- Statistic Item 4 -->
            <div class="flex flex-col items-center text-center bg-white shadow rounded-lg p-6">
                <i class="fas fa-balance-scale text-blue-500 text-6xl mb-4"></i>
                <h3 class="text-lg font-semibold text-gray-800">Claim Settlement Ratio</h3>
                <span class="text-4xl font-bold text-blue-600 mt-2 count" data-target="90">0</span>
                <p class="text-sm text-gray-500">%</p>
            </div>

            <!-- Statistic Item 5 -->
            <div class="flex flex-col items-center text-center bg-white shadow rounded-lg p-6">
                <i class="fas fa-building text-blue-500 text-6xl mb-4"></i>
                <h3 class="text-lg font-semibold text-gray-800">Branches</h3>
                <span class="text-4xl font-bold text-blue-600 mt-2 count" data-target="5">0</span>
                <p class="text-sm text-gray-500">+</p>
            </div>

            <!-- Statistic Item 6 -->
            <div class="flex flex-col items-center text-center bg-white shadow rounded-lg p-6">
                <i class="fas fa-users-cog text-blue-500 text-6xl mb-4"></i>
                <h3 class="text-lg font-semibold text-gray-800">Team Members</h3>
                <span class="text-4xl font-bold text-blue-600 mt-2 count" data-target="50">0</span>
                <p class="text-sm text-gray-500">+</p>
            </div>

            <!-- Statistic Item 7 -->
            <div class="flex flex-col items-center text-center bg-white shadow rounded-lg p-6">
                <i class="fas fa-cogs text-blue-500 text-6xl mb-4"></i>
                <h3 class="text-lg font-semibold text-gray-800">Services</h3>
                <span class="text-4xl font-bold text-blue-600 mt-2 count" data-target="7">0</span>
                <p class="text-sm text-gray-500">+</p>
            </div>
        </div>
    </div>
</section>

<div class="aboutPage aboutSeventh bg-gray-50">
    <div class="w-full flex section-container animate-slide-in">
        <!-- Left Side (Tabs) -->
        <div class="tabs-container w-1/4 bg-white shadow-md p-6 rounded-l-lg">
            <h2 class="text-2xl font-semibold text-blue-600 pb-6 border-b border-gray-200">Our Insurance Offering</h2>
            <div class="flex flex-col space-y-4 pt-4">
                <button
                    class="tab-title py-3 px-4 text-lg font-medium text-left text-gray-800 hover:text-blue-600 hover:bg-blue-50 rounded-lg transition-all bg-blue-50 text-blue-600 font-semibold"
                    data-tab="health-insurance">
                    Health Insurance
                </button>
                <button
                    class="tab-title py-3 px-4 text-lg font-medium text-left text-gray-800 hover:text-blue-600 hover:bg-blue-50 rounded-lg transition-all"
                    data-tab="motor-insurance">
                    Motor Insurance
                </button>
                <button
                    class="tab-title py-3 px-4 text-lg font-medium text-left text-gray-800 hover:text-blue-600 hover:bg-blue-50 rounded-lg transition-all"
                    data-tab="travel-insurance">
                    Travel Insurance
                </button>
                <button
                    class="tab-title py-3 px-4 text-lg font-medium text-left text-gray-800 hover:text-blue-600 hover:bg-blue-50 rounded-lg transition-all"
                    data-tab="property-insurance">
                    Property Insurance
                </button>
                <button
                    class="tab-title py-3 px-4 text-lg font-medium text-left text-gray-800 hover:text-blue-600 hover:bg-blue-50 rounded-lg transition-all"
                    data-tab="commercial-insurance">
                    Commercial Insurance
                </button>
                <button
                    class="tab-title py-3 px-4 text-lg font-medium text-left text-gray-800 hover:text-blue-600 hover:bg-blue-50 rounded-lg transition-all"
                    data-tab="asset-insurance">
                    Asset Insurance
                </button>
                <button
                    class="tab-title py-3 px-4 text-lg font-medium text-left text-gray-800 hover:text-blue-600 hover:bg-blue-50 rounded-lg transition-all"
                    data-tab="pet-insurance">
                    Pet Insurance
                </button>
                <button
                    class="tab-title py-3 px-4 text-lg font-medium text-left text-gray-800 hover:text-blue-600 hover:bg-blue-50 rounded-lg transition-all"
                    data-tab="bite-size-insurance">
                    Bite Size Insurance
                </button>
                <!-- Add other buttons -->
            </div>
        </div>

        <!-- Right Side (Tab Content) -->
        <div class="tab-content w-3/4 bg-white shadow-md p-8 rounded-r-lg">
            <div class="tab-panel health-insurance">
                <h3 class="text-xl font-bold text-blue-600 mb-4">Health Insurance</h3>
                <p class="text-gray-700 mb-2">
                    As the name says, this type of insurance covers the expenses incurred due to any illness or medical emergency.
                </p>
                <p class="text-gray-700 mb-4">
                    There are various types of health insurance available based on their coverage:
                </p>
                <ul class="list-disc pl-6 text-gray-700">
                    <li>Individual Health Insurance: Covers one policyholder.</li>
                    <li>Family Floater Health Insurance: Covers the complete family under a single policy.</li>
                    <li>Group Health Insurance: Covers the employees of an organization.</li>
                </ul>
            </div>
            <div class="tab-panel motor-insurance hidden">
                <h3 class="text-xl font-bold text-blue-600 mb-4">Motor Insurance</h3>
                <p class="text-gray-700">
                    If you own a vehicle, you will know that motor insurance is mandatory in India...
                </p>
            </div>
            <!-- Add other panels -->
            <div class="tab-panel travel-insurance hidden">
                <h3 class="text-xl font-bold text-blue-600 mb-4">Travel Insurance</h3>
                <p class="text-gray-700">Travel Insurance provides financial protection to you and your family when you are visiting any place in the country or abroad.<br />
                    It covers emergencies like loss of baggage, loss of passport, hijacking, medical emergencies, delayed flights, accidental deaths, adventure sports etc.</p>
                <p class="text-gray-700">The major types of travel insurance are:<br />
                    i. <strong>Domestic Travel Insurance :</strong> For travel within the country<br />
                    ii. I<strong>nternational Travel Insurance :</strong> For travel outside the country<br />
                    iii. <strong>Student Travel Insurance :</strong> If you are moving abroad for higher studies.</p>
                <p class="text-gray-700">The above types further have a list of different products under them like Individual Travel Insurance, Family Travel Insurance, Senior Citizen Travel Insurance, Corporate Travel Insurance, Multi Trip Travel Insurance, Single Trip Travel Insurance and Schengen Travel Insurance.</p>

            </div>

            <div class="tab-panel property-insurance hidden">
                <h3 class="text-xl font-bold text-blue-600 mb-4">Property Insurance</h3>
                <p class="text-gray-700">Another category of insurance is Property Insurance. A Property Insurance Policy provides financial reimbursement to the owner/renter of a building and its contents. It also covers damage caused to anyone other than the owner/renter if that person is injured on the property.</p>
                <p class="text-gray-700">Some products available in the market under property insurance include:<br />
                    i. <strong>Home Insurance :</strong> Provides financial coverage in case of any ignificant damage to the insured home due to any reason like fire, theft, flood, storm etc.<br />
                    ii. <strong>Shop Insurance :</strong> Covers the shop property and contents inside.<br />
                    iii. <strong>Burglary Insurance :</strong> Covers any loss or damage due to unlawful breaking and entering of insured premises.<br />
                    iv. <strong>Office Insurance :</strong> Office insurance provides coverage for the risks that can impact office operations like fire, burglary, misuse of office data, loss of money due to cheating of employees etc.<br />
                    v. <strong>Fire Insurance :</strong> Provides coverage against damage caused by any fire to property or assets.</p>

            </div>

            <div class="tab-panel commercial-insurance hidden">
                <h3 class="text-xl font-bold text-blue-600 mb-4">Commercial Insurance</h3>
                <p class="text-gray-700">A Commercial Lines Insurance policy ensures that the business does not face any financial burden because of any financial and business risks. Apart from covering the damages to the property or employee injury, it also covers public or employer liability.</p>
                <p class="text-gray-700">The policy is offered to commercial and business entities like large corporate houses, SMEs, and MSME industries.<br />
                    Commercial Insurance, as an umbrella segment, has a number of Insurance types based on the type of asset covered, viz.:<br />
                    i. <strong>Liability Insurance:</strong> An insurance product that provides coverage against any claims resulting from injury or damage to any third party, i.e., person or property. It offers the following types of Liability Insurance Policies:<br />
                    - Directors and Office Liability Insurance<br />
                    - General Liability Insurance<br />
                    - Public Liability Insurance<br />
                    - Cyber Insurance</p>
                <p class="text-gray-700">ii. <strong>Marine Cargo Insurance:</strong> This Insurance provides coverage for the inland transit of consignments. It covers the loss or damage of cargo or the means of its transportation between the point of origin and the final destination.</p>
                <p class="text-gray-700">iii. <strong>Engineering Insurance:</strong> Engineering Insurance provides coverage against all risks associated with engineering and machinery. It includes the following insurance products:<br />
                    - Contractor’s All-Risk Insurance<br />
                    - Erection All Risk Insurance<br />
                    - Plant and Machinery Insurance<br />
                    - Workmen Compensation Insurance: Workmen Compensation provides financial coverage to employees who get injured or die in any mishap during work. Thus, Workmen Compensation Insurance not only helps the employers to compensate these employees but also to fulfill their ethical duty as an employer.<br />
                    - Crop Insurance: As the name suggests, Crop Insurance is bought by agriculturists to cover the financial losses that a bad crop season, crop failure or any other related menace might bring in.</p>
            </div>

            <div class="tab-panel asset-insurance hidden">
                <h3 class="text-xl font-bold text-blue-600 mb-4">Asset Insurance</h3>
                <p class="text-gray-700">There is no denying the fact that modern-day devices are making our lives simpler, richer and smarter. However, in case of any damage, they are usually expensive to be repaired. As the name suggests, Asset Insurance provides financial coverage to your assets like Mobile TVs, and other appliances or electronics.</p>
            </div>

            <div class="tab-panel pet-insurance hidden">
                <h3 class="text-xl font-bold text-blue-600 mb-4">Pet Insurance</h3>
                <p class="text-gray-700">The much-needed insurance cover for your furry babies because they need it as much as we do! Pet Insurance provides financial coverage for your pet’s health and well-being requirements, such as any medical condition, such as pregnancy complications, dental treatments, and insect-borne diseases. Not just that, it also covers a lot of other conditions like pet theft, loss or damages to a third party because of the pet, accidents, overseas coverage and many more, depending on your insurance provider.</p>
            </div>

            <div class="tab-panel bite-size-insurance hidden">
                <h3 class="text-xl font-bold text-blue-600 mb-4">Bite Size Insurance</h3>
                <p class="text-gray-700">Bite-size Insurance, also known as small-ticket insurance/sachet insurance, is a non-comprehensive plan which focuses on specific needs. They are available at a lower premium and can be availed without documentation/tests.</p>
                <p class="text-gray-700">Since these insurance plans are specific, they have limited but focused coverage. In fact, Bite-Size Insurance is a category and not a type. It is unrestricted across all categories like health, travel, property etc.</p>
                <p class="text-gray-700">Below are a few common Bite-Sized insurance products available in the market:<br />
                    - Online Fraud Protection<br />
                    - Cab Ride Insurance<br />
                    - Backpack Insurance<br />
                    - Marathon Insurance and many more.</p>

            </div>
        </div>
    </div>
</div>


@endsection