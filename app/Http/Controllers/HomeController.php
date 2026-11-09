<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Show the IERIICH 13 Exhibition Homepage.
     */
    public function index()
    {
        $event = [
            'edition' => '13th Edition',
            'code' => 'IERIICH 13',
            'full_title' => 'International Exhibition of Research, Invention, Innovation, Creativity & Humanities',
            'theme' => 'Empowering Future Innovations Through Research & Meta-Technology',
            'date_range' => '4th – 6th January 2026',
            'start_date' => '2026-01-04T09:00:00',
            'end_date' => '2026-01-06T17:00:00',
            'venue' => 'SITC Hall (Dewan SITC)',
            'institution' => 'Universiti Pendidikan Sultan Idris (UPSI)',
            'faculty' => 'Fakulti Komputeran & Meta-Teknologi (META)',
            'centenary' => 'SITC • MPSI • IPSI • UPSI (1922 – 2022)',
            'location' => 'Kampus Sultan Abdul Jalil Shah, Tanjung Malim, Perak, Malaysia',
        ];

        $stats = [
            ['value' => '130+', 'label' => 'Final Year Projects', 'desc' => 'Across computing & technology'],
            ['value' => '4', 'label' => 'Exhibition Tracks', 'desc' => 'Research, Invention, Innovation, Humanities'],
            ['value' => '30+', 'label' => 'Distinguished Judges', 'desc' => 'Academic & industrial panels'],
            ['value' => 'RM 15K', 'label' => 'Awards & Grants', 'desc' => 'Gold, Silver, Bronze & Grand Trophy'],
        ];

        $tracks = [
            [
                'id' => 'research',
                'name' => 'Research',
                'subtitle' => 'Fundamental & Applied Scientific Inquiry',
                'icon' => 'microscope',
                'description' => 'Rigorous scientific studies, machine learning models, computational intelligence, meta-technology systems, and academic discoveries.',
                'color' => 'from-amber-500/20 to-yellow-500/10 border-amber-500/30 text-amber-600',
                'badge' => 'Academic Research',
            ],
            [
                'id' => 'invention',
                'name' => 'Invention',
                'subtitle' => 'Novel Hardware, Devices & Prototypes',
                'icon' => 'cpu',
                'description' => 'Original physical prototypes, embedded smart IoT devices, assistive robotics, biomedical instruments, and patented physical mechanisms.',
                'color' => 'from-slate-700/20 to-zinc-600/10 border-slate-500/30 text-slate-800',
                'badge' => 'Hardware & Devices',
            ],
            [
                'id' => 'innovation',
                'name' => 'Innovation',
                'subtitle' => 'Software Systems & Digital Solutions',
                'icon' => 'rocket',
                'description' => 'Full-stack enterprise applications, cloud native systems, meta-verse environments, smart campus solutions, and workflow transformations.',
                'color' => 'from-yellow-600/20 to-amber-600/10 border-yellow-500/30 text-yellow-700',
                'badge' => 'Software & Platforms',
            ],
            [
                'id' => 'creativity',
                'name' => 'Creativity & Humanities',
                'subtitle' => 'Edutech, Media & Social Impact',
                'icon' => 'sparkles',
                'description' => 'Interactive educational technologies, game design for education, digital heritage preservation, HCI, accessibility, and human-centric tech.',
                'color' => 'from-zinc-800/20 to-neutral-700/10 border-zinc-700/30 text-zinc-800',
                'badge' => 'Creative & Society',
            ],
        ];

        $projects = [
            [
                'id' => 1,
                'code' => 'FYP-META-001',
                'title' => 'MetaSpeak: Generative AI Non-Verbal Communication Assistant',
                'track' => 'creativity',
                'track_name' => 'Creativity & Humanities',
                'booth' => 'A-01',
                'team' => 'Amirul Daniel bin Razak, Nurul Syakirah binti Azmi',
                'supervisor' => 'Assoc. Prof. Dr. Ahmad Zaki bin Mansor',
                'department' => 'Software Engineering & Meta-Tech',
                'summary' => 'A multimodal assistive tablet app using fine-tuned vision-language models to translate eye movements and symbol combinations into natural Bahasa Melayu and English speech for children with severe speech impediments.',
                'tags' => ['Assistive AI', 'Accessibility', 'Mobile App', 'NLP'],
                'medal_target' => 'Gold Medal Contender',
            ],
            [
                'id' => 2,
                'code' => 'FYP-META-014',
                'title' => 'Autonomous IoT Microclimate Pod with Predictive Hydroponics',
                'track' => 'invention',
                'track_name' => 'Invention',
                'booth' => 'B-14',
                'team' => 'Tan Wei Jie, Farah Nabilah binti Khairuddin',
                'supervisor' => 'Dr. Siti Rohani binti Mohd Said',
                'department' => 'Computer Systems & Embedded Networking',
                'summary' => 'Smart automated vertical farming container featuring closed-loop ESP32 microcontroller arrays, nutrient dosing algorithms, and real-time cloud telemetry for urban university campuses.',
                'tags' => ['IoT', 'Embedded Systems', 'Smart Agriculture', 'ESP32'],
                'medal_target' => 'Gold Medal Contender',
            ],
            [
                'id' => 3,
                'code' => 'FYP-META-027',
                'title' => 'NeuroClass: Real-Time Classroom Cognitive Engagement Analytics',
                'track' => 'research',
                'track_name' => 'Research',
                'booth' => 'A-12',
                'team' => 'Muhammad Hafizuddin bin Haris',
                'supervisor' => 'Ts. Dr. Noor Azlina binti Kamaruddin',
                'department' => 'Artificial Intelligence & Data Science',
                'summary' => 'Edge AI computer vision framework that evaluates collective student attention spans and lecture comprehension indicators without violating student privacy or facial storage regulations.',
                'tags' => ['Computer Vision', 'Edge AI', 'Edutech', 'Privacy-Preserving'],
                'medal_target' => 'Best Research Award Nominee',
            ],
            [
                'id' => 4,
                'code' => 'FYP-META-038',
                'title' => 'MetaWarisan: Immersive Virtual Reality Perak Heritage Museum',
                'track' => 'creativity',
                'track_name' => 'Creativity & Humanities',
                'booth' => 'C-05',
                'team' => 'Lim Kah Sheng, Aina Natasha binti Rosli',
                'supervisor' => 'Dr. Mohd Ridzuan bin Yusoff',
                'department' => 'Interactive Media & Game Development',
                'summary' => 'High-fidelity WebXR and Unreal Engine 5 virtual walkthrough preserving historic Sultan Idris Training College (SITC) architecture and traditional Perak crafts with interactive historical NPC guides.',
                'tags' => ['Virtual Reality', 'Unreal Engine 5', 'SITC Heritage', 'Interactive 3D'],
                'medal_target' => 'Creative Excellence Nominee',
            ],
            [
                'id' => 5,
                'code' => 'FYP-META-049',
                'title' => 'UniCert: Decentralized Academic Credential Verification Engine',
                'track' => 'innovation',
                'track_name' => 'Innovation',
                'booth' => 'D-08',
                'team' => 'Danish Irfan bin Zainal, Siti Sarah binti Osman',
                'supervisor' => 'Ts. Dr. Hairul Nizam bin Ismail',
                'department' => 'Distributed Systems & Cyber Security',
                'summary' => 'Tamper-proof verifiable credential protocol utilizing zero-knowledge cryptographic proofs to validate graduation certificates and academic micro-credentials instantaneously for recruiters.',
                'tags' => ['Blockchain', 'Zero-Knowledge Proofs', 'Cybersecurity', 'Web3'],
                'medal_target' => 'Gold Medal Contender',
            ],
            [
                'id' => 6,
                'code' => 'FYP-META-062',
                'title' => 'ExoGrip: EMG-Controlled Soft Pneumatic Rehabilitation Glove',
                'track' => 'invention',
                'track_name' => 'Invention',
                'booth' => 'B-22',
                'team' => 'Khairul Anuar bin Basir, Pravin Kumar a/l Selvan',
                'supervisor' => 'Ir. Dr. Wan Faizal bin Wan Ishak',
                'department' => 'Robotics & Bio-Computing',
                'summary' => 'Low-cost lightweight exoskeleton glove controlled by forearm surface electromyography sensors to aid post-stroke patients in finger flexion therapy and grasp rehabilitation exercises.',
                'tags' => ['Robotics', 'Biomedical', 'EMG Sensor', 'Rehabilitation'],
                'medal_target' => 'Chancellor Innovation Trophy Nominee',
            ],
        ];

        $schedule = [
            [
                'day' => 'Day 1',
                'date' => 'Sunday, 4th January 2026',
                'badge' => 'Opening & Setup',
                'items' => [
                    ['time' => '08:00 AM - 09:00 AM', 'title' => 'Participant Registration & Booth Dressing', 'venue' => 'SITC Hall Foyer'],
                    ['time' => '09:30 AM - 10:30 AM', 'title' => 'Official Opening Ceremony & Welcoming Address', 'venue' => 'Main Auditorium, SITC Hall', 'highlight' => true],
                    ['time' => '10:30 AM - 11:30 AM', 'title' => 'Keynote: "Meta-Technology & The Frontier of Applied Innovations"', 'venue' => 'Main Stage'],
                    ['time' => '11:30 AM - 01:00 PM', 'title' => 'VIP & Executive Committee Exhibition Walkabout', 'venue' => 'Exhibition Floors (Booths A to D)'],
                    ['time' => '02:00 PM - 05:00 PM', 'title' => 'Preliminary Project Evaluation & Technical Demos', 'venue' => 'Assigned Project Booths'],
                ],
            ],
            [
                'day' => 'Day 2',
                'date' => 'Monday, 5th January 2026',
                'badge' => 'Judging & Public Exhibition',
                'items' => [
                    ['time' => '09:00 AM - 12:30 PM', 'title' => 'Formal Jury Assessment & Student Pitches (Panels 1 - 10)', 'venue' => 'All Exhibition Zones', 'highlight' => true],
                    ['time' => '10:00 AM - 04:30 PM', 'title' => 'Public Showcase, School Delegations & Industry Walkthrough', 'venue' => 'SITC Hall Exhibition Arena'],
                    ['time' => '02:30 PM - 04:00 PM', 'title' => 'Industry Tech Talk: "From FYP Prototype to Commercial Startup"', 'venue' => 'Mini Seminar Room 1'],
                    ['time' => '04:30 PM - 05:30 PM', 'title' => 'Jury Deliberation & Scoring Verification Session', 'venue' => 'Secretariat Room'],
                ],
            ],
            [
                'day' => 'Day 3',
                'date' => 'Tuesday, 6th January 2026',
                'badge' => 'Grand Awards & Closing',
                'items' => [
                    ['time' => '09:00 AM - 11:00 AM', 'title' => 'Top 6 Finalist Grand Pitch Presentation', 'venue' => 'Main Stage (Live Streamed)', 'highlight' => true],
                    ['time' => '11:00 AM - 12:30 PM', 'title' => 'Interactive Public Voting & People’s Choice Demonstrations', 'venue' => 'Central Plaza'],
                    ['time' => '02:00 PM - 04:30 PM', 'title' => 'Grand Closing & Award Ceremony (Gold, Silver, Bronze & Overall Champion)', 'venue' => 'Main Auditorium', 'highlight' => true],
                    ['time' => '04:30 PM - 05:30 PM', 'title' => 'Photo Session & Booth Teardown', 'venue' => 'SITC Hall & Historical Courtyard'],
                ],
            ],
        ];

        $awards = [
            [
                'title' => 'IERIICH 13 Grand Champion Trophy',
                'desc' => 'Awarded to the most outstanding final year project demonstrating superior novelty, technical complexity, rigorous methodology, and exceptional commercial viability.',
                'prize' => 'RM 2,500 Cash + Prestige Trophy + Commercialization Grant Fast-track',
                'badge' => 'Best of the Best',
                'tier' => 'grand',
            ],
            [
                'title' => 'Gold Medal Accolades',
                'desc' => 'Awarded to top projects scoring 85% and above across judging rubric parameters in each exhibition category.',
                'prize' => 'Gold Medal + Official Certificate of Excellence',
                'badge' => 'Score 85% - 100%',
                'tier' => 'gold',
            ],
            [
                'title' => 'Silver & Bronze Medals',
                'desc' => 'Conferred upon high-caliber projects meeting rigorous standards of engineering, scientific inquiry, and design refinement.',
                'prize' => 'Medallion + Certificate of Distinction',
                'badge' => 'Score 70% - 84%',
                'tier' => 'silver',
            ],
            [
                'title' => 'Dean’s Meta-Tech Industry Choice Award',
                'desc' => 'Hand-picked by invited industry partners for immediate real-world deployment, incubation, and internship recruitment.',
                'prize' => 'RM 1,000 Special Industry Cash Prize + Incubation Mentorship',
                'badge' => 'Industry Endorsed',
                'tier' => 'industry',
            ],
        ];

        $faqs = [
            [
                'q' => 'What is IERIICH 13 and who is eligible to exhibit?',
                'a' => 'IERIICH 13 (International Exhibition of Research, Invention, Innovation, Creativity & Humanities) is the flagship research and final year project (FYP) exhibition organized by Fakulti Komputeran & Meta-Teknologi (META), Universiti Pendidikan Sultan Idris (UPSI). Final year undergraduate students, postgraduate researchers, and invited partner institutions are eligible to showcase their innovative projects.',
            ],
            [
                'q' => 'Where is the exhibition held and how can visitors attend?',
                'a' => 'The exhibition takes place at Dewan SITC (SITC Hall), Kampus Sultan Abdul Jalil Shah, Universiti Pendidikan Sultan Idris in Tanjung Malim, Perak from 4th to 6th January 2026. Admission is free for university students, lecturers, industry delegates, and the general public.',
            ],
            [
                'q' => 'What are the judging criteria for the awards?',
                'a' => 'Projects are assessed by independent academic and industry panels across four criteria: (1) Novelty & Inventiveness (25%), (2) Methodology & Technical Execution (30%), (3) Practical Applicability & Market Potential (25%), and (4) Presentation, Poster Quality & Live Demonstration (20%).',
            ],
            [
                'q' => 'What are the booth specifications provided to each project team?',
                'a' => 'Each allocated booth includes a standard exhibition table (3x2 ft) with cover, two chairs, one 240V power outlet, booth number display board, and space for standard A1 vertical poster easel.',
            ],
            [
                'q' => 'How can students submit their final poster and project abstract?',
                'a' => 'Registered student teams can submit their final project abstract, video teaser link, and high-resolution A1 poster PDF through the participant portal or by contacting the secretariat at fskik.ieriich@upsi.edu.my.',
            ],
        ];

        return view('welcome', compact('event', 'stats', 'tracks', 'projects', 'schedule', 'awards', 'faqs'));
    }
}
