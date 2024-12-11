<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Subcategory;

class SubcategoriesTableSeeder extends Seeder
{
    public function run()
    {
            \App\Models\User::factory(50)->create();
            
            // INC Insurance
            Subcategory::create([
            'service_id' => 1,
            'name' => 'Auto Insurance',
            'moto' => 'Protect Your Ride Without the High Price – Auto Insurance Made Easy!',
            'tag1' => 'Affordable Coverage',
            'tag2' => 'Peace of Mind',
            'tag3' => 'Customizable Plans',
            'tag4' => 'Multi-Policy Discounts',
            'tag5' => 'Emergency Assistance',
            'description' => 'Our auto insurance offers affordable coverages to protect you and your ride through the road ahead. Get an auto insurance quote today to stay protected when you drive. Make sure you feel safe on the road wherever you go. Our auto insurance covers injuries and damages so that you can drive feeling assured en route to your next destination.',
            'user' => 'Protect your Car, Vehicle and Auto.',
            'benefit' => 'Need to update or open your auto insurance file at an affordable price in New York? We offer hassle-free, low-cost solutions to help you get the best coverage for your car. Whether you are a new driver or updating your policy, our expert team makes the process quick, easy, and budget-friendly. Drive with peace of mind today!',


            'baseprice' => '100','standerdprice' => '150','premiumprice' => '250','plan1' => 'Base Consultant','plan2' => 'Renewal','plan3' => 'One Year Support','plan4' => 'Base Consultant','plan5' => 'New','plan6' => 'One Year Support','plan7' => 'Expert Consultant','plan8' => 'Renewal/New','plan9' => 'Three Year Support',
            ]);
            Subcategory::create([
                'service_id' => 1,
                'name' => 'Home insurance',
                'moto' => 'Protecting Your Home, Securing Your Peace of Mind.',
                'tag1' => 'Affordable Coverage',
                'tag2' => 'Peace of Mind',
                'tag3' => 'Customizable Plans',
                'tag4' => 'Multi-Policy Discounts',
                'tag5' => 'Emergency Assistance',
                'description' => 'Home insurance provides coverage for your residence by protecting your home and belongings from damages by certain risks or perils. Make sure your home is protected and safe by getting a quote from us today. Events that are out of our control can happen, so ensure that your valued belongings are protected through our reliable insurance policy. ',
                'user' => 'Protect your home, assets, and property.',
                'benefit' => 'Home insurance provides peace of mind by safeguarding your property and belongings against unexpected damages, ensuring youre financially protected when you need it most.',
                
                'baseprice' => '100','standerdprice' => '150','premiumprice' => '250','plan1' => 'Base Consultant','plan2' => 'Renewal','plan3' => 'One Year Support','plan4' => 'Base Consultant','plan5' => 'New','plan6' => 'One Year Support','plan7' => 'Expert Consultant','plan8' => 'Renewal/New','plan9' => 'Three Year Support',
            ]);
            Subcategory::create([
                'service_id' => 1,
                'name' => 'Business insurance',
                'moto' => 'Empowering Your Business, Safeguarding Your Success.',
                'tag1' => 'Affordable Coverage',
                'tag2' => 'Peace of Mind',
                'tag3' => 'Customizable Plans',
                'tag4' => 'Multi-Policy Discounts',
                'tag5' => 'Emergency Assistance',
                'description' => 'Protect your valuable business from financial risks by getting our business insurance quote. Our insurance values your business and will help you get a quote that offers coverage for your unique business and needs. By getting our business insurance coverage, you, as a business owner, will protect yourself, your employees, your customers, your assets, and your company’s future from high costs associated with any unexpected crises.',
                'user' => 'Protect your business, assets, and employees.',
                'benefit' => 'Safeguard your business with customized insurance coverage designed to protect your assets, employees, and future. Our tailored business insurance quotes provide the right protection against unexpected crises, helping you minimize financial risks and keep your business running smoothly',
                
                'baseprice' => '100','standerdprice' => '150','premiumprice' => '250','plan1' => 'Base Consultant','plan2' => 'Renewal','plan3' => 'One Year Support','plan4' => 'Base Consultant','plan5' => 'New','plan6' => 'One Year Support','plan7' => 'Expert Consultant','plan8' => 'Renewal/New','plan9' => 'Three Year Support',
            ]);
            Subcategory::create([
                'service_id' => 1,
                'name' => 'Life insurance',
                'moto' => 'Secure Tomorrow, Cherish Today',
                'tag1' => 'Affordable Coverage',
                'tag2' => 'Peace of Mind',
                'tag3' => 'Customizable Plans',
                'tag4' => 'Multi-Policy Discounts',
                'tag5' => 'Emergency Assistance',
                'description' => 'Our life insurance provides coverage to make sure your loved ones are protected, providing a financial safety net in the event that the policyholder passes away. Invest in a life insurance quote and know that your loved ones will be protected even after you pass. Ensure that your loved ones find and secure financial security with our life insurance coverage that can pay for college tuitions, mortgages or other expenses.',
                'user' => 'Protect your life, family, and advantures.',
                'benefit' => 'Protect your family’s future with our life insurance coverage. Ensure your loved ones are financially secure, with support for college tuition, mortgages, and other essential expenses, even after youre gone.',

                'baseprice' => '100','standerdprice' => '150','premiumprice' => '250','plan1' => 'Base Consultant','plan2' => 'Renewal','plan3' => 'One Year Support','plan4' => 'Base Consultant','plan5' => 'New','plan6' => 'One Year Support','plan7' => 'Expert Consultant','plan8' => 'Renewal/New','plan9' => 'Three Year Support',
            ]);
            Subcategory::create([
                'service_id' => 1,
                'name' => 'Motorcycle insurance',
                'moto' => 'Ride Freely, Insure Securely.',
                'tag1' => 'Affordable Coverage',
                'tag2' => 'Peace of Mind',
                'tag3' => 'Customizable Plans',
                'tag4' => 'Multi-Policy Discounts',
                'tag5' => 'Emergency Assistance',
                'description' => 'While on the road, know that you’re protected with our motorcycle insurance. Our affordable insurance protects your bike and keeps you riding safely on the open road. Our coverage prevents losses for your bike if it is stolen, vandalized, or damaged. Find your next adventure on the bike, feeling comfort from being covered by our motorcycle insurance. ',
                'user' => 'Protect your ride, motorcycle, and mototrip.',
                'benefit' => 'With our motorcycle insurance, you gain peace of mind knowing youre fully covered. Whether its theft, vandalism, or damage from an accident, our affordable coverage ensures that you can ride with confidence. Enjoy every adventure, secure in the knowledge that your bike and your safety are protected on the open road',

                'baseprice' => '100','standerdprice' => '150','premiumprice' => '250','plan1' => 'Base Consultant','plan2' => 'Renewal','plan3' => 'One Year Support','plan4' => 'Base Consultant','plan5' => 'New','plan6' => 'One Year Support','plan7' => 'Expert Consultant','plan8' => 'Renewal/New','plan9' => 'Three Year Support',
            ]);
            Subcategory::create([
                'service_id' => 1,
                'name' => 'Recreational insurance',
                'moto' => 'Adventure with Confidence, Play with Peace of Mind.',
                'tag1' => 'Affordable Coverage',
                'tag2' => 'Peace of Mind',
                'tag3' => 'Customizable Plans',
                'tag4' => 'Multi-Policy Discounts',
                'tag5' => 'Emergency Assistance',
                'description' => 'Get an RV insurance quote today to make sure that your next trip is protected and covered. Our affordable RV insurance aims to protect your recreational vehicle needs so that your next outing on the road is secure and backed up. By getting a quote from us, you can direct your focus to the road and your lifestyle ahead.',
                'user' => 'Protect your Recreational, tour, and advantures.',
                'benefit' => 'With our affordable RV insurance, you can travel with peace of mind knowing that your vehicle and adventures are covered. Whether youre embarking on a weekend getaway or a long road trip, our comprehensive plans protect against accidents, theft, and other unexpected events. Plus, our customer-focused service ensures that you get the best value, tailored to your needs. Get a quote today and drive with confidence, leaving the worry behind so you can enjoy the open road to the fullest.',
                
                'baseprice' => '100','standerdprice' => '150','premiumprice' => '250','plan1' => 'Base Consultant','plan2' => 'Renewal','plan3' => 'One Year Support','plan4' => 'Base Consultant','plan5' => 'New','plan6' => 'One Year Support','plan7' => 'Expert Consultant','plan8' => 'Renewal/New','plan9' => 'Three Year Support',
            ]);
            Subcategory::create([
                'service_id' => 1,
                'name' => 'Umbrella insurance',
                'moto' => 'Extra Coverage, Total Confidence.',
                'tag1' => 'Affordable Coverage',
                'tag2' => 'Peace of Mind',
                'tag3' => 'Customizable Plans',
                'tag4' => 'Multi-Policy Discounts',
                'tag5' => 'Emergency Assistance',
                'description' => 'Umbrella insurance coverage protects you and your family from events where you exceed the limits of your standard insurance. Your insurance may only be able to cover a portion of the claim: our umbrella insurance policy will protect you and your family against certain liability claims and lawsuits, exceeding these policy limits. Our umbrella insurance provides liability coverage above your standard auto or home insurance, protecting the life you’ve worked hard for.',
                'user' => 'Protect your life, motorcycle, and advantures.',
                'benefit' => 'Umbrella insurance provides extra liability coverage beyond your standard home or auto insurance, protecting your assets and savings from large claims or lawsuits. It offers peace of mind, ensuring youre covered when accidents or unexpected events exceed your policy limits.',
                
                
                'baseprice' => '100','standerdprice' => '150','premiumprice' => '250','plan1' => 'Base Consultant','plan2' => 'Renewal','plan3' => 'One Year Support','plan4' => 'Base Consultant','plan5' => 'New','plan6' => 'One Year Support','plan7' => 'Expert Consultant','plan8' => 'Renewal/New','plan9' => 'Three Year Support',
            ]);
            Subcategory::create([
                'service_id' => 1,
                'name' => 'Disability insurance',
                'moto' => 'Protecting Your Income, Supporting Your Independence',
                'tag1' => 'Affordable Coverage',
                'tag2' => 'Peace of Mind',
                'tag3' => 'Customizable Plans',
                'tag4' => 'Multi-Policy Discounts',
                'tag5' => 'Emergency Assistance',
                'description' => 'Disability insurance provides financial protection if you become unable to work due to illness or injury. It replaces a portion of your income, helping you cover living expenses and maintain your quality of life during a difficult time. With disability insurance, you can focus on recovery without the added stress of financial instability.',
                'user' => 'Protect your special, loved, and challagens one.',
                'benefit' => 'Disability insurance ensures you have income protection if youre unable to work due to illness or injury, helping you maintain financial stability and cover essential expenses during recovery.',
                
                
                'baseprice' => '100','standerdprice' => '150','premiumprice' => '250','plan1' => 'Base Consultant','plan2' => 'Renewal','plan3' => 'One Year Support','plan4' => 'Base Consultant','plan5' => 'New','plan6' => 'One Year Support','plan7' => 'Expert Consultant','plan8' => 'Renewal/New','plan9' => 'Three Year Support',
            ]);
            Subcategory::create([
                'service_id' => 1,
                'name' => 'Renters Insurance',
                'moto' => 'Guard Your Space, Protect Your Peace',
                'tag1' => 'Affordable Coverage',
                'tag2' => 'Peace of Mind',
                'tag3' => 'Customizable Plans',
                'tag4' => 'Multi-Policy Discounts',
                'tag5' => 'Emergency Assistance',
                'description' => 'Our renters insurance is reliable and affordable, giving you coverage and protecting you and your belongings from unexpected events like theft and injuries you are liable for. Feel protected when you rent an apartment, condo, or home. A landlord’s insurance policy is simply not enough: it likely only covers their building while our insurance offers coverage for your personal belongings.',
                'user' => 'Protect your goods, belonging, from theft.',
                'benefit' => 'Renters insurance provides affordable protection for your personal belongings, covering theft, damage, and liability for injuries you may be responsible for. Unlike a landlords policy, it ensures that your possessions are safe, giving you peace of mind while renting.',
                
                'baseprice' => '100','standerdprice' => '150','premiumprice' => '250','plan1' => 'Base Consultant','plan2' => 'Renewal','plan3' => 'One Year Support','plan4' => 'Base Consultant','plan5' => 'New','plan6' => 'One Year Support','plan7' => 'Expert Consultant','plan8' => 'Renewal/New','plan9' => 'Three Year Support',
            ]);
            Subcategory::create([
                'service_id' => 1,
                'name' => 'Liability insurance',
                'moto' => 'Shielding You from the Unexpected',
                'tag1' => 'Affordable Coverage',
                'tag2' => 'Peace of Mind',
                'tag3' => 'Customizable Plans',
                'tag4' => 'Multi-Policy Discounts',
                'tag5' => 'Emergency Assistance',
                'description' => 'Liability coverage comes with most vehicle and property insurance policies, which include auto, homeowners, etc. This coverage protects the holders financially if they are responsible for someone else’s injuries or property damage. This could be car insurance (referred to as auto liability coverage), which includes, but is not limited to, injuries caused to someone else or damage to other vehicles while you were driving. Additionally, property insurance (referred to as property liability coverage), includes, but is not limited to, injuries to others that occur on your property that you are responsible for or damage to other people’s property that you are responsible for. A general liability insurance policy, or business liability insurance, protects businesses from any claims that may have resulted from their business operations. This policy’s coverage includes bodily injuries, medical payments, advertising injuries, and more. There are also professional liability insurances and product liability insurances. Professional liability insurances help business owners if they do something wrong or fail to do something important, which harms the customer. ',
                'user' => 'Protect your love ones, relative and secure them.',
                'benefit' => 'Liability coverage protects you financially if youre responsible for someone elses injuries or property damage, covering costs like medical bills, repairs, and legal fees. This applies to auto, homeowners, and business insurance, ensuring youre shielded from unexpected financial burdens.',
                
                
                'baseprice' => '100','standerdprice' => '150','premiumprice' => '250','plan1' => 'Base Consultant','plan2' => 'Renewal','plan3' => 'One Year Support','plan4' => 'Base Consultant','plan5' => 'New','plan6' => 'One Year Support','plan7' => 'Expert Consultant','plan8' => 'Renewal/New','plan9' => 'Three Year Support',
            ]);
            // TLC INSURANCE
            Subcategory::create([
                'service_id' => 2,
                'name' => 'Black Cab Insurance',
                'moto' => 'Driven to Protect, Ready to Cover',
                'tag1' => 'Affordable Coverage',
                'tag2' => 'Peace of Mind',
                'tag3' => 'Customizable Plans',
                'tag4' => 'Multi-Policy Discounts',
                'tag5' => 'Emergency Assistance',
                'description' => 'Black cabs are a For-Hire Vehicle that is affiliated with a black car base. These cars are dispatched on a pre-arranged basis with payments usually done in a non-cash form. Rideshare or app-based companies such as Uber, Lyft, and Via are licensed as Black Car Bases. The NYC Taxi and Limousine Commission (TLC) requires these Black Car vehicles to have TLC plates and registration, as well as TLC insurance coverage, which must meet the TLC minimum liability coverage requirements set at $100,000 per person, $300,000 per occurrence, and $200,000 for personal injury protection. Vehicles with 7 or more passengers must maintain higher limits. ',
                'user' => 'Protect your cab, car and rideshear vichicle.',
                'benefit' => 'Black Car services offer a reliable, professional, and luxurious transportation option with pre-arranged bookings, cashless payments, and TLC-regulated safety standards. These vehicles are insured with comprehensive liability and personal injury protection, ensuring a safe and smooth ride. Perfect for both individual and group travel, Black Cars provide a high-quality, convenient experience while meeting all necessary insurance and regulatory requirements.',
                
                
                'baseprice' => '100','standerdprice' => '150','premiumprice' => '250','plan1' => 'Base Consultant','plan2' => 'Renewal','plan3' => 'One Year Support','plan4' => 'Base Consultant','plan5' => 'New','plan6' => 'One Year Support','plan7' => 'Expert Consultant','plan8' => 'Renewal/New','plan9' => 'Three Year Support',
            ]);
            Subcategory::create([
                'service_id' => 2,
                'name' => 'Yellow Cab Insurance',
                'moto' => 'Driven to Protect, Ready to Cover',
                'tag1' => 'Affordable Coverage',
                'tag2' => 'Peace of Mind',
                'tag3' => 'Customizable Plans',
                'tag4' => 'Multi-Policy Discounts',
                'tag5' => 'Emergency Assistance',
                'description' => 'Feel secure on the road with our affordable Yellow Cab insurance. Yellow Cab businesses face a lot of risks in their daily routine and operations. To protect yourself from situations such as injuries faced by your passengers that you may be liable for, you need to make sure that the policy you choose can cover all these risks that you may face. Yellow Cab drivers in New York City are vehicles with the right to pick up street-hailing and prearranged passengers anywhere in New York City. The NYC Taxi and Limousine Commission (TLC) requires these Yellow Medallion Taxicabs to abide by their insurance requirements, which must meet the TLC minimum liability coverage requirements set at $100,000 per person, $300,000 per occurrence, and $200,000 for personal injury protection. ',
                'user' => 'Protect your cab, car and rideshear vichicle.',
                'benefit' => 'Our Yellow Cab insurance meets TLC requirements, offering $100,000 per person and $300,000 per occurrence for bodily injury, plus $200,000 for personal injury protection. Protect your business and drive with confidence in NYC.',
                
                
                'baseprice' => '100','standerdprice' => '150','premiumprice' => '250','plan1' => 'Base Consultant','plan2' => 'Renewal','plan3' => 'One Year Support','plan4' => 'Base Consultant','plan5' => 'New','plan6' => 'One Year Support','plan7' => 'Expert Consultant','plan8' => 'Renewal/New','plan9' => 'Three Year Support',
            ]);
            Subcategory::create([
                'service_id' => 2,
                'name' => 'Green Cab insurance',
                'moto' => 'Driven to Protect, Ready to Cover',
                'tag1' => 'Affordable Coverage',
                'tag2' => 'Peace of Mind',
                'tag3' => 'Customizable Plans',
                'tag4' => 'Multi-Policy Discounts',
                'tag5' => 'Emergency Assistance',
                'description' => 'Street Hail Livery or Green Taxi/Outer Boro Taxis are licensed for-hire vehicles in NYC that are only allowed to pick up passengers in the outer boroughs, such as Queens, Bronx, Brooklyn, Staten Island, and certain parts of Manhattan but can drop you off anywhere. These taxis are painted in a unique apple green color, required by the NYC Taxi and Limousine Commission (TLC). Along with having TLC plates and registration, all Green Taxis must have insurance coverage, which must meet the TLC minimum liability coverage requirements set at $100,000 per person, $300,000 per occurrence, and $200,000 for personal injury protection.',
                'user' => 'Protect your cab, car and rideshear vichicle.',
                'benefit' => 'Green Taxis in NYC offer a convenient and affordable transportation option for passengers in the outer boroughs, with the added benefit of being able to drop passengers off anywhere in the city. These licensed for-hire vehicles provide peace of mind with TLC-regulated insurance coverage, including a minimum of $100,000 per person and $300,000 per occurrence in liability, along with $200,000 for personal injury protection, ensuring a safe and reliable ride for all passengers.',
                
                
                'baseprice' => '100','standerdprice' => '150','premiumprice' => '250','plan1' => 'Base Consultant','plan2' => 'Renewal','plan3' => 'One Year Support','plan4' => 'Base Consultant','plan5' => 'New','plan6' => 'One Year Support','plan7' => 'Expert Consultant','plan8' => 'Renewal/New','plan9' => 'Three Year Support',
                
            ]);
            Subcategory::create([
                'service_id' => 2,
                'name' => 'Livery Insurance',
                'moto' => 'Driven to Protect, Ready to Cover',
                'tag1' => 'Affordable Coverage',
                'tag2' => 'Peace of Mind',
                'tag3' => 'Customizable Plans',
                'tag4' => 'Multi-Policy Discounts',
                'tag5' => 'Emergency Assistance',
                'description' => 'Livery insurance is a type of commercial auto coverage used for vehicles under businesses that make money from transporting people. These can be black car services to rideshare drivers. It’s important to transport people, and a big responsibility, which is why it is important to protect your clients and your own business and assets. A livery insurance policy will cover that allowing you to feel secure with your business and assets while transporting others around. ',
                'user' => 'Protect your cab, car and rideshear vichicle.',
                'benefit' => 'Livery insurance protects your business and passengers by covering liability, accidents, and property damage. It ensures your vehicles are compliant and safe, allowing you to focus on providing reliable transportation with peace of mind.',
                
                
                'baseprice' => '100','standerdprice' => '150','premiumprice' => '250','plan1' => 'Base Consultant','plan2' => 'Renewal','plan3' => 'One Year Support','plan4' => 'Base Consultant','plan5' => 'New','plan6' => 'One Year Support','plan7' => 'Expert Consultant','plan8' => 'Renewal/New','plan9' => 'Three Year Support',
                
            ]);
            // TLC SEVICES
            Subcategory::create([
                'service_id' => 3,
                'name' => 'Vehicle Service',
                'moto' => 'Drive with Confidence, Insure with Ease',
                'tag1' => '#TLCInsurance',
                'tag2' => '#AffordableCoverage',
                'tag3' => '#DriveSafeNYC',
                'tag4' => '#VehicleProtections',
                'tag5' => '#InsuranceMadeEasy',
                'description' => 'Offering reliable and cost-effective TLC insurance services in New York. We help professional drivers and vehicle owners open or update their insurance files quickly and efficiently, ensuring compliance with TLC requirements.',
                'user' => 'For TLC drivers (rideshare, taxi, or delivery).',
                'benefit' => 'Our TLC insurance services offer drivers in New York an affordable and hassle-free way to open or update their policies. With expert guidance, quick processing, and budget-friendly options, we ensure youre always covered and compliant, giving you the peace of mind to focus on your journey.',
                
                
                'baseprice' => '100','standerdprice' => '150','premiumprice' => '250','plan1' => 'Base Consultant','plan2' => 'Renewal','plan3' => 'One Year Support','plan4' => 'Base Consultant','plan5' => 'New','plan6' => 'One Year Support','plan7' => 'Expert Consultant','plan8' => 'Renewal/New','plan9' => 'Three Year Support',
                
            ]);
            Subcategory::create([
                'service_id' => 3,
                'name' => 'Base Transfer',
                'moto' => 'Seamless TLC Transfers, Tailored for You',
                'tag1' => '#TLCTransferExperts',
                'tag2' => '#HassleFreeService',
                'tag3' => '#AffordableTLCUpdate',
                'tag4' => '#NYCTLC',
                'tag5' => '#InsuranceSupport',
                'description' => 'Base Transfer of TLC services made simple and affordable. We specialize in helping drivers and businesses in New York update or transfer their TLC files with ease. Whether youre starting fresh or making changes, we ensure a smooth, stress-free process at the lowest cost.',
                'user' => 'TLC drivers, base owners, and businesses in New York.',
                'benefit' => 'Navigating TLC base transfers can be complex, but it doesnt have to be stressful. Our expert team is here to simplify the process, offering affordable and reliable solutions that get you back on the road in no time. Whether youre transferring your base, updating your documents, or ensuring compliance with TLC requirements, we’ve got your back. Trust us to handle the details so you can focus on driving your success.',
                
                
                'baseprice' => '100','standerdprice' => '150','premiumprice' => '250','plan1' => 'Base Consultant','plan2' => 'Renewal','plan3' => 'One Year Support','plan4' => 'Base Consultant','plan5' => 'New','plan6' => 'One Year Support','plan7' => 'Expert Consultant','plan8' => 'Renewal/New','plan9' => 'Three Year Support',
                
            ]);
            Subcategory::create([
                'service_id' => 3,
                'name' => 'Plate Transfer',
                'moto' => 'Seamless Plate Transfers, Hassle-Free TLC Services',
                'tag1' => '#TLCPlateTransfer',
                'tag2' => '#HassleFreeServices',
                'tag3' => '#AffordableInsurance',
                'tag4' => '#QuickTLCUpdate',
                'tag5' => '#NYInsuranceSupport',
                'description' => 'Effortlessly manage your TLC plate transfer needs with our expert services! We provide affordable, fast, and reliable solutions to ensure your TLC plates are updated and transferred with zero stress. Let us handle the paperwork while you focus on the road.',
                'user' => 'TLC drivers and vehicle owners in New York.',
                'benefit' => 'Looking to transfer your TLC plates? We make the process simple and stress-free! Our affordable services are designed to meet the needs of TLC drivers in New York, ensuring a fast and smooth plate transfer experience. With our team of experts managing the paperwork and guiding you through each step, you’ll save time and avoid hassles. Trust us to help you stay compliant and get back to doing what you do best—driving!',
                
                
                'baseprice' => '100','standerdprice' => '150','premiumprice' => '250','plan1' => 'Base Consultant','plan2' => 'Renewal','plan3' => 'One Year Support','plan4' => 'Base Consultant','plan5' => 'New','plan6' => 'One Year Support','plan7' => 'Expert Consultant','plan8' => 'Renewal/New','plan9' => 'Three Year Support',
                
            ]);
            Subcategory::create([
                'service_id' => 3,
                'name' => 'SHL Permit Transfer',
                'moto' => 'Driven to Protect, Ready to Cover',
                'tag1' => '#TLCTransfer',
                'tag2' => '#SHLPermitExperts',
                'tag3' => '#HassleFreeService',
                'tag4' => '#NYCDriverSupport',
                'tag5' => '#FastAndAffordable',
                'description' => 'SHL Permit Transfer for TLC Services made simple and affordable. We specialize in helping drivers transfer their Street Hail Livery (SHL) permits with minimal hassle. Our expert team ensures compliance with all TLC regulations, so you can focus on your business while we handle the paperwork.',
                'user' => 'looking to transfer or acquire SHL permits in New York City',
                'benefit' => 'Transferring your SHL permit for TLC services shouldn’t be a headache. With our specialized SHL Permit Transfer service, we handle all the complexities of the process, from paperwork to regulatory compliance, ensuring a smooth experience for you. Whether youre a seasoned TLC driver or a fleet operator, our team is dedicated to delivering fast, affordable, and reliable service so you can get back on the road without delay.',
                
                
                'baseprice' => '100','standerdprice' => '150','premiumprice' => '250','plan1' => 'Base Consultant','plan2' => 'Renewal','plan3' => 'One Year Support','plan4' => 'Base Consultant','plan5' => 'New','plan6' => 'One Year Support','plan7' => 'Expert Consultant','plan8' => 'Renewal/New','plan9' => 'Three Year Support',
                
            ]);
            Subcategory::create([
                'service_id' => 3,
                'name' => 'Renew Payment',
                'moto' => 'Simplifying TLC Payments, One Renewal at a Time!',
                'tag1' => '#TLCServices',
                'tag2' => '#RenewPaymentMadeEasy',
                'tag3' => '#HassleFreeInsurance',
                'tag4' => '#AffordableTLCUpdatess',
                'tag5' => '#ReliableRenewals',
                'description' => 'SHL Renew Payment Services offers a streamlined and cost-effective solution for TLC license renewals and payments. Designed to meet the specific needs of New Yorks professional drivers, we ensure quick, affordable, and hassle-free service to keep you on the road without delays.',
                'user' => 'TLC drivers and professionals in New York',
                'benefit' => 'At SHL Renew Payment Services, we know that New Yorks TLC drivers have no time to waste. Thats why we offer a seamless process for renewing your TLC insurance and payments. Our team is dedicated to providing fast, affordable, and reliable services, so you can focus on what you do best—driving your business forward. Trust SHL for all your TLC renewal needs, and experience the convenience and peace of mind you deserve.',
                
                
                'baseprice' => '100','standerdprice' => '150','premiumprice' => '250','plan1' => 'Base Consultant','plan2' => 'Renewal','plan3' => 'One Year Support','plan4' => 'Base Consultant','plan5' => 'New','plan6' => 'One Year Support','plan7' => 'Expert Consultant','plan8' => 'Renewal/New','plan9' => 'Three Year Support',
                
            ]);
            // DMV services
            Subcategory::create([
                'service_id' => 4,
                'name' => 'New Plate',
                'moto' => 'Drive with Confidence, Start with Us',
                'tag1' => '#DMVServices',
                'tag2' => '#EasyRegistration',
                'tag3' => '#AffordableDMV',
                'tag4' => '#QuickPlateUpdate ',
                'tag5' => '#NYInsurance',
                'description' => 'Get your new license plate hassle-free with our efficient DMV services. Whether youre registering a vehicle for the first time or updating your plate, we simplify the process to save you time and money. Our affordable service ensures you’re back on the road in no time!',
                'user' => 'Ideal for vehicle owners in New York.',
                'benefit' => 'With our DMV services, you’ll experience a seamless and efficient process from start to finish. We save you time by handling the paperwork and reducing the hassle of long waits at the DMV. Our affordable pricing ensures you won’t break the bank while getting your new plate or updating your registration. Enjoy a stress-free experience, knowing we’re taking care of all the details, so you can get back on the road with ease and confidence.',
                
                
                'baseprice' => '100','standerdprice' => '150','premiumprice' => '250','plan1' => 'Base Consultant','plan2' => 'Renewal','plan3' => 'One Year Support','plan4' => 'Base Consultant','plan5' => 'New','plan6' => 'One Year Support','plan7' => 'Expert Consultant','plan8' => 'Renewal/New','plan9' => 'Three Year Support',
                
            ]);
            Subcategory::create([
                'service_id' => 4,
                'name' => 'Renew Registration',
                'moto' => 'Keep Moving, Renew Easily with DMV Services!',
                'tag1' => '#DMVRenewal',
                'tag2' => '#EasyRegistration',
                'tag3' => '#FastRenewal',
                'tag4' => '#NewYorkDMV ',
                'tag5' => '#HassleFreeRenewal',
                'description' => 'Renewing your vehicle registration has never been easier! At DMV Services, we offer a seamless, fast process that ensures you stay compliant and your vehicle stays road-ready. Save time and effort while avoiding penalties by renewing online or in-person, all at an affordable price.',
                'user' => 'Anyone in New York needing to renew their vehicle registration.',
                'benefit' => 'Renewing your vehicle registration through DMV Services offers numerous advantages. With a quick and easy process, you can avoid late fees and penalties while ensuring your vehicle remains road-legal. Our affordable options, combined with online and in-person renewal choices, provide ultimate convenience. Whether youre an individual car owner or managing a fleet, our expert assistance guarantees a smooth experience, saving you time and reducing stress. Stay compliant and keep your vehicle on the road without the hassle.',
                
                
                'baseprice' => '100','standerdprice' => '150','premiumprice' => '250','plan1' => 'Base Consultant','plan2' => 'Renewal','plan3' => 'One Year Support','plan4' => 'Base Consultant','plan5' => 'New','plan6' => 'One Year Support','plan7' => 'Expert Consultant','plan8' => 'Renewal/New','plan9' => 'Three Year Support',
                
            ]);
            Subcategory::create([
                'service_id' => 4,
                'name' => 'Duplicate Titel',
                'moto' => 'Lost Your Title? Get a Duplicate with Ease!',
                'tag1' => '#DuplicateTitle',
                'tag2' => '#DMVServices ',
                'tag3' => '#TitleReplacement ',
                'tag4' => '#FastTitle ',
                'tag5' => '#NewYorkDMV',
                'description' => 'Need a duplicate title for your vehicle? DMV Services makes it simple to replace a lost or damaged title with minimal hassle. Whether online or in-person, our quick and affordable service ensures you get back on track in no time.',
                'user' => 'Did you lost or damaged their title and need a replacement.',
                'benefit' => 'Obtaining a duplicate title through DMV Services is fast and stress-free. Our affordable process allows you to replace a lost or damaged title quickly, helping you maintain legal ownership of your vehicle. With convenient online and in-person options, you can easily get the documentation you need without waiting in long lines. Our expert staff ensures the process is smooth and efficient, saving you time and effort.',
                
                
                'baseprice' => '100','standerdprice' => '150','premiumprice' => '250','plan1' => 'Base Consultant','plan2' => 'Renewal','plan3' => 'One Year Support','plan4' => 'Base Consultant','plan5' => 'New','plan6' => 'One Year Support','plan7' => 'Expert Consultant','plan8' => 'Renewal/New','plan9' => 'Three Year Support',
                
            ]);
            Subcategory::create([
                'service_id' => 4,
                'name' => 'Plate Surrender',
                'moto' => 'Streamline Your DMV Experience—Fast, Easy Plate Surrender!',
                'tag1' => '#DMVServices',
                'tag2' => '#PlateSurrender ',
                'tag3' => '#QuickAndEasy ',
                'tag4' => '#LicensePlateReturn ',
                'tag5' => '#AffordableDMV ',
                'description' => 'Say goodbye to long DMV lines! With our Plate Surrender service, you can quickly and efficiently return your plates without the hassle. Whether youre moving out of state, selling your vehicle, or just no longer need your plates, we handle the paperwork for you, saving you time and stress.',
                'user' => 'TLC drivers and professionals in New York',
                'benefit' => 'At SHL Renew Payment Services, we know that New Yorks TLC drivers have no time to waste. Thats why we offer a seamless process for renewing your TLC insurance and payments. Our team is dedicated to providing fast, affordable, and reliable services, so you can focus on what you do best—driving your business forward. Trust SHL for all your TLC renewal needs, and experience the convenience and peace of mind you deserve.',
                
                
                'baseprice' => '100','standerdprice' => '150','premiumprice' => '250','plan1' => 'Base Consultant','plan2' => 'Renewal','plan3' => 'One Year Support','plan4' => 'Base Consultant','plan5' => 'New','plan6' => 'One Year Support','plan7' => 'Expert Consultant','plan8' => 'Renewal/New','plan9' => 'Three Year Support',
                
            ]);
            // TAX FILES
            Subcategory::create([
                'service_id' => 5,
                'name' => 'Personal FIles',
                'moto' => 'Your Taxes, Simplified and Secured',
                'tag1' => '#TaxServices ',
                'tag2' => '#TaxPreparation  ',
                'tag3' => '#SecureTaxFiling ',
                'tag4' => '#AffordableTaxHelp ',
                'tag5' => '#TaxSolutions',
                'description' => 'The U.S. utilizes a progressive tax system, meaning portions of a person’s taxable income can fall into different brackets containing different rates. There are seven federal income tax rates at 10%, 12%, 22%, 24%, 32%, 35%, and 37%. Depending on your taxable income and filing status, a certain tax bracket and its rate will apply to you. Tax liability insurance protects those who are insured when the IRS disagrees with any tax positions they may have taken.',
                'user' => 'Looking for expert guidance in preparing and filing their taxes.',
                'benefit' => 'Our tax services provide a range of benefit s to ensure your filing is simple and efficient. With affordable pricing, we eliminate the stress of complicated paperwork while maximizing your tax returns. You’ll receive personalized attention from tax experts who focus on your specific needs, ensuring you get the best possible outcome. We handle your sensitive information with the utmost care, ensuring it’s securely processed. Additionally, our team offers clear guidance, helping you avoid common pitfalls and penalties, so you can file with confidence and peace of mind.',
                
                
                'baseprice' => '100','standerdprice' => '150','premiumprice' => '250','plan1' => 'Base Consultant','plan2' => 'Renewal','plan3' => 'One Year Support','plan4' => 'Base Consultant','plan5' => 'New','plan6' => 'One Year Support','plan7' => 'Expert Consultant','plan8' => 'Renewal/New','plan9' => 'Three Year Support',
                
            ]);
            Subcategory::create([
                'service_id' => 5,
                'name' => 'Business Files',
                'moto' => 'Maximize Your Savings, Minimize Your Stress – Expert Tax Services at Your Fingertips',
                'tag1' => '#TaxServices ',
                'tag2' => '#TaxPreparation ',
                'tag3' => '#TaxFiling ',
                'tag4' => '#BusinessTaxes',
                'tag5' => ' #TaxExpert ',
                'description' => 'All businesses, aside from partnerships, are required to file an annual income tax return. Depending on the form of business you operate, you may need to pay different types of taxes. All businesses that pay income tax usually make regular payments of estimated tax during the year. Additionally, self-employment tax is a social security and Medicare tax for individuals that work for themselves. These payments of self-employment tax contribute to coverage under the social security system. Businesses with employees have employment tax responsibilities that they must pay and forms to file, including social security and Medicare taxes. Federal income tax withholding, and federal unemployment tax. If a business manufacture or sells certain products, operates certain kinds of business, uses various kinds of equipment, facilities, or products, or receives payment for certain payments, then they must file forms and pay excise taxes. By adding on business insurance, your business assets can be protected from any potential dangers on top of what your business structure protects.',
                'user' => 'For Startups, small businesses, and large corporations, looking to simplify tax filing and maximize savings.',
                'benefit' => 'With our tax services, your business can enjoy personalized advice from experienced tax professionals who focus on maximizing deductions and minimizing liabilities. We streamline the filing process to save you time and avoid costly mistakes, ensuring that you meet all deadlines with ease. Our affordable rates provide exceptional value, and our reliable support throughout the year helps you maintain peace of mind, knowing your businesss taxes are in expert hands.',
                
                
                'baseprice' => '100','standerdprice' => '150','premiumprice' => '250','plan1' => 'Base Consultant','plan2' => 'Renewal','plan3' => 'One Year Support','plan4' => 'Base Consultant','plan5' => 'New','plan6' => 'One Year Support','plan7' => 'Expert Consultant','plan8' => 'Renewal/New','plan9' => 'Three Year Support',
                
            ]);
            Subcategory::create([
                'service_id' => 5,
                'name' => 'Business Setup',
                'moto' => '"Your Path to Simplified Tax Solutions."',
                'tag1' => '#TaxServices ',
                'tag2' => '#BusinessSetup ',
                'tag3' => '#FinancialGrowth  ',
                'tag4' => '#TaxConsulting ',
                'tag5' => '#AffordableTaxHelp',
                'description' => 'Our Tax Services business setup ensures that your financial foundations are strong and compliant. We provide personalized tax solutions for startups, small businesses, and individuals. From planning to filing, we make navigating taxes simple and efficient, while keeping your costs low and your returns optimized.',
                'user' => 'For Entrepreneurs, small business owners, freelancers, or individuals',
                'benefit' => 'Start-up costs are what the business paid or incurred for creating an active business. Unless there is a required tax year, the business adopts a tax year by filing their first income tax return using that tax year. When you are setting up your business, you must also consider what kind of business entity is being established. This will determine which income tax return form will be filed. The most common forms of business are sole-proprietorships, partnership, corporation, and S corporations. There are also Limited Liability Companies (LLC), which are business structures allowed by state statute. When selecting a business structure, you must consider legal and tax reasons. Business Insurance comes into play in this aspect, which can protect you from the many unexpected costs of setting up and running your business. Choosing a structure like an LLC typically only protects your personal property from lawsuits but adding on business insurance can make sure that both your personal and business assets are protected from any hazards. ',
                
                
                'baseprice' => '100','standerdprice' => '150','premiumprice' => '250','plan1' => 'Base Consultant','plan2' => 'Renewal','plan3' => 'One Year Support','plan4' => 'Base Consultant','plan5' => 'New','plan6' => 'One Year Support','plan7' => 'Expert Consultant','plan8' => 'Renewal/New','plan9' => 'Three Year Support',
                
            ]);
            // courses
            Subcategory::create([
                'service_id' => 6,
                'name' => 'Defensive Driving ',
                'moto' => 'Drive Safely, Drive Smart.',
                'tag1' => '#DefensiveDriving  ',
                'tag2' => ' #DefensiveDrivingCourse',
                'tag3' => '#DrivingCourses ',
                'tag4' => '#TrafficSafety  ',
                'tag5' => '#AccidentPrevention ',
                'description' => 'Defensive driving is an essential skill for drivers to learn. By taking a comprehensive course that teaches drivers advanced techniques and strategies to minimize risks and prevent accidents on the road, you develop skills like risk perception, safe driving, and an awareness to hazards, that will help you anticipate and respond to potentially dangerous situations.  Additionally, by taking this course, you could be saving money on your auto insurance or improving your driving skills to avoid costly fines. Many courses will offer insurance discounts after completion of the curriculum. Furthermore, you can avoid penalties after you learn how to drive safer. The course can also reduce points on your driving record. The course will prepare you to expand your vehicle’s lifespan with proper maintenance tips, preparations for emergencies and how to troubleshoot common issues like changing tires, checking fluids, and more. ',
                'user' => 'improve their driving skills, reduce traffic violations, lower insurance premiums, or fulfill court-ordered driving courses.',
                'benefit' => 'By enrolling in our Defensive Driving Courses, you’ll gain essential skills to stay safe on the road, avoid accidents, and react appropriately in emergencies. The course helps reduce points on your driving record, which may lower insurance costs, and may also satisfy legal requirements for ticket dismissal. With our flexible and convenient online options, you can complete the course at your own pace, all while becoming a more responsible and knowledgeable driver.',
                
                
                'baseprice' => '100','standerdprice' => '150','premiumprice' => '250','plan1' => 'Base Consultant','plan2' => 'Renewal','plan3' => 'One Year Support','plan4' => 'Base Consultant','plan5' => 'New','plan6' => 'One Year Support','plan7' => 'Expert Consultant','plan8' => 'Renewal/New','plan9' => 'Three Year Support',
                
            ]);
            Subcategory::create([
                'service_id' => 6,
                'name' => 'Security Guard Training',
                'moto' => 'Empowering Protectors, Securing Futures',
                'tag1' => '#SecurityGuardTraining ',
                'tag2' => '#SafetyFirst s ',
                'tag3' => '#ProfessionalSecurity t',
                'tag4' => '#GuardTraining  ',
                'tag5' => '#SecurityCertification ',
                'description' => 'Security Guard Training School provides specialized training to individuals, equipping them with the knowledge needed to become professional security guards. These courses typically provide an in-depth look into topics such as the role of a security guard and their legal powers and limitations. Security guard insurance coverage is specifically tailored to the needs and risks associated with security professionals. Security guards protect businesses and institutions and need insurance that can fully protect them in their line of work. Due to the risks that they face due to the nature of their job, they are either provided with or seek insurance for financial protection in case of accidents, injuries, property damage, or legal claims that are associated with their work. Additionally, insurance may benefit security gua',
                'user' => 'Security guards, law enforcement professionals seeking',
                'benefit' => 'Our Security Guard Training course provides numerous advantages for both individuals and organizations. Trainees gain a solid foundation in security operations, emergency management, and conflict resolution, equipping them with the tools to respond effectively to various situations. The certification earned is widely recognized, enhancing job prospects and career growth in the security industry. Participants will also develop practical, real-world skills, increasing their ability to handle emergencies and maintain a safe environment. Ultimately, this training boosts the confidence and professionalism of security guards, ensuring that they are fully prepared to safeguard people and property.',


                'baseprice' => '100','standerdprice' => '150','premiumprice' => '250','plan1' => 'Base Consultant','plan2' => 'Renewal','plan3' => 'One Year Support','plan4' => 'Base Consultant','plan5' => 'New','plan6' => 'One Year Support','plan7' => 'Expert Consultant','plan8' => 'Renewal/New','plan9' => 'Three Year Support',
                
            ]);
            Subcategory::create([
                'service_id' => 6,
                'name' => 'Notary Public',
                'moto' => '#Trusted, Reliable, Certified Notary Services.',
                'tag1' => '#NotaryPublic  ',
                'tag2' => '#CertifiedNotary ',
                'tag3' => '#LegalServices ',
                'tag4' => '#DocumentAuthentication   ',
                'tag5' => '#NotaryServices ',
                'description' => 'A notary public is an individual appointed by the government acting as an impartial form of witness for the signing of important documents. They can verify the authenticity of signatures and ensure the validity of the documents. Notaries serve as trusted public officials who prevent fraud. In some cases, insurance coverage can be relevant to notaries public. In certain situations, they may need certain types of insurance depending on their circumstances such as business insurance, to protect themselves against potential risks and liabilities. Some insurances may also protect notaries public from financial losses and liability claims that may have come from errors or omissions from their notarizing work and financially harms the public. ',
                'user' => ' need notarization services for contracts, agreements, powers of attorney, and other critical documents',
                'benefit' => 'Our Notary Public service offers peace of mind by ensuring that your important documents are properly authenticated and legally binding. With a certified notary, you can trust that signatures are genuine, helping to prevent fraud and ensuring the smooth processing of legal matters. We provide a fast, convenient, and secure service, saving you time and hassle while maintaining the integrity of your documents.',
                
                
                'baseprice' => '100','standerdprice' => '150','premiumprice' => '250','plan1' => 'Base Consultant','plan2' => 'Renewal','plan3' => 'One Year Support','plan4' => 'Base Consultant','plan5' => 'New','plan6' => 'One Year Support','plan7' => 'Expert Consultant','plan8' => 'Renewal/New','plan9' => 'Three Year Support',
                
            ]);
    }
}