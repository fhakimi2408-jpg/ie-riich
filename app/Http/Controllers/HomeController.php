<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Show the Professional IERIICH 13 Exhibition Homepage.
     */
    public function index()
    {
        $event = [
            'edition' => '13th Edition',
            'code' => 'IERIICH 13',
            'acronym_full' => 'International Exhibition of Research, Invention, Innovation, Creativity & Humanities',
            'theme' => 'Pioneering Human-Centric Innovations & Meta-Technology Frontiers',
            'dates' => '4th – 6th January 2026',
            'start_date_iso' => '2026-01-04T09:00:00',
            'venue' => 'SITC Hall (Dewan SITC)',
            'campus' => 'Kampus Sultan Abdul Jalil Shah',
            'university' => 'Universiti Pendidikan Sultan Idris (UPSI)',
            'faculty' => 'Fakulti Komputeran & Meta-Teknologi (META)',
            'centenary' => '100 Tahun SITC • MPSI • IPSI • UPSI (1922 – 2022)',
            'city' => 'Tanjung Malim, Perak Darul Ridzuan, Malaysia',
            'expected_visitors' => '1,500+',
            'total_booths' => '130+',
            'prize_pool' => 'RM 15,000+',
        ];

        $stats = [
            ['value' => '130+', 'label' => 'Exhibiting FYP Projects', 'sub' => 'Undergraduate & Postgraduate'],
            ['value' => '4', 'label' => 'Specialization Tracks', 'sub' => 'Research, Invention, Innovation, Humanities'],
            ['value' => '32', 'label' => 'Industry & Academic Judges', 'sub' => 'Evaluated by leading experts'],
            ['value' => 'RM 15K', 'label' => 'Awards & Innovation Grants', 'sub' => 'Grand Champion, Medals & Accolades'],
        ];

        $tracks = [
            [
                'id' => 'research',
                'name' => 'Research',
                'badge' => 'Scientific Inquiry',
                'icon' => 'microscope',
                'lead' => 'Algorithms, Applied Data Science & Computational Intelligence',
                'description' => 'Novel theoretical frameworks, deep learning models, natural language processing for indigenous languages, and empirical computing studies.',
                'project_count' => '34 Projects',
                'color_accent' => 'amber',
            ],
            [
                'id' => 'invention',
                'name' => 'Invention',
                'badge' => 'Hardware & Devices',
                'icon' => 'cpu',
                'lead' => 'Smart IoT Systems, Embedded Robotics & Assistive Devices',
                'description' => 'Physical hardware prototypes, micro-controller sensor networks, smart agriculture automation pods, and biometric assistive robotics.',
                'project_count' => '30 Projects',
                'color_accent' => 'slate',
            ],
            [
                'id' => 'innovation',
                'name' => 'Innovation',
                'badge' => 'Software & Platforms',
                'icon' => 'rocket',
                'lead' => 'Enterprise Applications, Cloud Architectures & Distributed Systems',
                'description' => 'Full-stack cloud applications, zero-knowledge verifiable credential networks, cybersecurity auditing suites, and mobile solutions.',
                'project_count' => '38 Projects',
                'color_accent' => 'yellow',
            ],
            [
                'id' => 'creativity',
                'name' => 'Creativity & Humanities',
                'badge' => 'Edutech & Society',
                'icon' => 'sparkles',
                'lead' => 'Edutech, Virtual Reality, Serious Games & Heritage Preservation',
                'description' => 'Immersive WebXR virtual museums, adaptive educational games for neurodivergent learners, cultural digitization, and accessible UI/UX.',
                'project_count' => '28 Projects',
                'color_accent' => 'zinc',
            ],
        ];

        $projects = [
            [
                'id' => 1,
                'code' => 'FYP-META-001',
                'title' => 'MetaSpeak: Generative AI Non-Verbal Communication Assistant',
                'track' => 'creativity',
                'track_label' => 'Creativity & Humanities',
                'booth' => 'A-01',
                'zone' => 'Zone A (Main Hall)',
                'team' => 'Amirul Daniel bin Razak, Nurul Syakirah binti Azmi',
                'program' => 'Bachelor of Software Engineering (Honours)',
                'supervisor' => 'Assoc. Prof. Dr. Ahmad Zaki bin Mansor',
                'department' => 'Department of Computing & Meta-Technology',
                'summary' => 'A multimodal assistive tablet app using fine-tuned vision-language models to translate subtle eye gestures and symbol selections into natural Bahasa Melayu and English synthesized speech for children with severe non-verbal motor conditions.',
                'demo_url' => 'https://demo.metaspeak.upsi.edu.my',
                'tags' => ['Assistive AI', 'Accessibility', 'Mobile App', 'NLP'],
                'target_award' => 'Gold Medal & Best Social Impact Contender',
            ],
            [
                'id' => 2,
                'code' => 'FYP-META-014',
                'title' => 'Autonomous IoT Microclimate Pod with Predictive Hydroponics',
                'track' => 'invention',
                'track_label' => 'Invention',
                'booth' => 'B-14',
                'zone' => 'Zone B (Hardware Arena)',
                'team' => 'Tan Wei Jie, Farah Nabilah binti Khairuddin',
                'program' => 'Bachelor of Computer Science (Internet Computing)',
                'supervisor' => 'Dr. Siti Rohani binti Mohd Said',
                'department' => 'Department of Computer Systems & Networking',
                'summary' => 'Fully autonomous enclosed vertical hydroponics pod featuring dual ESP32 sensor clusters, automated pH/EC titration pumps, and edge predictive algorithms optimizing yield per kilowatt-hour for urban university campuses.',
                'demo_url' => 'https://iot.hydroponics.upsi.edu.my',
                'tags' => ['IoT', 'Embedded Systems', 'Smart Agriculture', 'ESP32'],
                'target_award' => 'Gold Medal & Green Tech Trophy Nominee',
            ],
            [
                'id' => 3,
                'code' => 'FYP-META-027',
                'title' => 'NeuroClass: Real-Time Classroom Cognitive Engagement Analytics',
                'track' => 'research',
                'track_label' => 'Research',
                'booth' => 'A-12',
                'zone' => 'Zone A (Main Hall)',
                'team' => 'Muhammad Hafizuddin bin Haris',
                'program' => 'Bachelor of Information Technology (Artificial Intelligence)',
                'supervisor' => 'Ts. Dr. Noor Azlina binti Kamaruddin',
                'department' => 'Department of Artificial Intelligence & Data Science',
                'summary' => 'An edge-deployed computer vision pipeline analyzing anonymized classroom facial keypoints and gaze vectors to produce lecture comprehension heatmaps without recording or storing identifiable student biometrics.',
                'demo_url' => 'https://research.neuroclass.upsi.edu.my',
                'tags' => ['Computer Vision', 'Edge AI', 'Edutech', 'Privacy-Preserving'],
                'target_award' => 'Best Research Paper & Gold Medal',
            ],
            [
                'id' => 4,
                'code' => 'FYP-META-038',
                'title' => 'MetaWarisan: Immersive Virtual Reality Perak Heritage Museum',
                'track' => 'creativity',
                'track_label' => 'Creativity & Humanities',
                'booth' => 'C-05',
                'zone' => 'Zone C (Immersive Studio)',
                'team' => 'Lim Kah Sheng, Aina Natasha binti Rosli',
                'program' => 'Bachelor of Multimedia (Interactive Media)',
                'supervisor' => 'Dr. Mohd Ridzuan bin Yusoff',
                'department' => 'Department of Creative Multimedia & Animation',
                'summary' => 'High-fidelity Unreal Engine 5 and WebXR digital twin preserving historic Sultan Idris Training College (SITC) colonial architecture and traditional Perak crafts with interactive historical AI guides.',
                'demo_url' => 'https://vr.metawarisan.upsi.edu.my',
                'tags' => ['Virtual Reality', 'Unreal Engine 5', 'SITC Heritage', 'Interactive 3D'],
                'target_award' => 'Dean Creative Excellence Award Nominee',
            ],
            [
                'id' => 5,
                'code' => 'FYP-META-049',
                'title' => 'UniCert: Decentralized Academic Credential Verification Protocol',
                'track' => 'innovation',
                'track_label' => 'Innovation',
                'booth' => 'D-08',
                'zone' => 'Zone D (Software Showcase)',
                'team' => 'Danish Irfan bin Zainal, Siti Sarah binti Osman',
                'program' => 'Bachelor of Software Engineering (Honours)',
                'supervisor' => 'Ts. Dr. Hairul Nizam bin Ismail',
                'department' => 'Department of Computing & Meta-Technology',
                'summary' => 'A production-grade tamper-proof verifiable credential system utilizing Zero-Knowledge cryptographic proofs (zk-SNARKs) allowing employers to verify graduate degree transcripts in under 2 seconds without revealing student personal identity records.',
                'demo_url' => 'https://unicert.upsi.edu.my',
                'tags' => ['Blockchain', 'Zero-Knowledge Proofs', 'Cybersecurity', 'Web3'],
                'target_award' => 'Best Commercialization Potential Award',
            ],
            [
                'id' => 6,
                'code' => 'FYP-META-062',
                'title' => 'ExoGrip: EMG-Controlled Soft Pneumatic Hand Rehabilitation Glove',
                'track' => 'invention',
                'track_label' => 'Invention',
                'booth' => 'B-22',
                'zone' => 'Zone B (Hardware Arena)',
                'team' => 'Khairul Anuar bin Basir, Pravin Kumar a/l Selvan',
                'program' => 'Bachelor of Computer Systems (Robotics)',
                'supervisor' => 'Ir. Dr. Wan Faizal bin Wan Ishak',
                'department' => 'Department of Computer Systems & Networking',
                'summary' => 'Affordable 3D-printed soft pneumatic exoskeleton glove controlled by forearm surface electromyography (sEMG) biosensors and machine learning classifiers to assist stroke rehabilitation patients in finger flexion exercises.',
                'demo_url' => 'https://exogrip.rehab.upsi.edu.my',
                'tags' => ['Robotics', 'Biomedical', 'sEMG Sensors', 'Rehabilitation'],
                'target_award' => 'Grand Champion Trophy Finalist',
            ],
        ];

        $schedule = [
            [
                'day_number' => '1',
                'day_title' => 'Day 01',
                'full_date' => 'Sunday, 4th January 2026',
                'phase' => 'Official Opening & Preliminary Judging',
                'items' => [
                    [
                        'time' => '08:00 AM – 09:00 AM',
                        'title' => 'Participant Registration & Booth Dressing',
                        'location' => 'SITC Hall Foyer',
                        'type' => 'Logistics',
                        'speaker' => 'Secretariat & Student Committee',
                    ],
                    [
                        'time' => '09:30 AM – 10:30 AM',
                        'title' => 'Grand Opening Ceremony & Welcoming Address',
                        'location' => 'Dewan SITC Main Auditorium',
                        'type' => 'Ceremony',
                        'speaker' => 'Dean, Fakulti Komputeran & Meta-Teknologi, UPSI',
                        'highlight' => true,
                    ],
                    [
                        'time' => '10:30 AM – 11:30 AM',
                        'title' => 'Keynote: "From Campus FYP to Deep-Tech Commercialization"',
                        'location' => 'Auditorium Main Stage',
                        'type' => 'Keynote',
                        'speaker' => 'Invited Industry Director (Malaysia Digital Economy Corporation - MDEC)',
                    ],
                    [
                        'time' => '11:30 AM – 01:00 PM',
                        'title' => 'VIP & Executive Committee Exhibition Walkabout',
                        'location' => 'Exhibition Zones A, B, C & D',
                        'type' => 'VIP Tour',
                        'speaker' => 'University Vice-Chancellor & Industry Delegation',
                    ],
                    [
                        'time' => '02:00 PM – 05:00 PM',
                        'title' => 'Preliminary Project Evaluation & Technical Demos',
                        'location' => 'All Assigned Booths',
                        'type' => 'Judging Round 1',
                        'speaker' => 'Academic & Industry Evaluation Panels 1 to 10',
                        'highlight' => true,
                    ],
                ],
            ],
            [
                'day_number' => '2',
                'day_title' => 'Day 02',
                'full_date' => 'Monday, 5th January 2026',
                'phase' => 'Jury Scoring, Public Showcase & Tech Talks',
                'items' => [
                    [
                        'time' => '09:00 AM – 12:30 PM',
                        'title' => 'Final Formal Jury Assessment & Live Student Demonstrations',
                        'location' => 'All Exhibition Booths',
                        'type' => 'Judging Round 2',
                        'speaker' => 'Specialized Assessment Panels & External Examiners',
                        'highlight' => true,
                    ],
                    [
                        'time' => '10:00 AM – 04:30 PM',
                        'title' => 'Public Walkthrough, Industry Recruiter Meet & School Tours',
                        'location' => 'SITC Hall Exhibition Arena',
                        'type' => 'Open Exhibition',
                        'speaker' => 'Open to Industry, Alumni & General Public',
                    ],
                    [
                        'time' => '02:30 PM – 03:45 PM',
                        'title' => 'Tech Masterclass: "Scaling AI & Meta-Technologies in Industry 5.0"',
                        'location' => 'Seminar Hall 1',
                        'type' => 'Tech Talk',
                        'speaker' => 'Principal AI Architect, Cloud & Meta-Tech Partner',
                    ],
                    [
                        'time' => '04:30 PM – 05:30 PM',
                        'title' => 'Secretariat Jury Deliberation & Scoring Verification',
                        'location' => 'Auditorium Secretariat Chamber',
                        'type' => 'Closed Deliberation',
                        'speaker' => 'Chief Jury & Academic Committee',
                    ],
                ],
            ],
            [
                'day_number' => '3',
                'day_title' => 'Day 03',
                'full_date' => 'Tuesday, 6th January 2026',
                'phase' => 'Top 6 Finalist Grand Pitch & Award Gala',
                'items' => [
                    [
                        'time' => '09:00 AM – 11:30 AM',
                        'title' => 'Top 6 Finalist Grand Pitching Championship',
                        'location' => 'Dewan SITC Main Stage (Live Broadcast)',
                        'type' => 'Final Pitch',
                        'speaker' => 'Top 6 Selected Project Teams before Grand Jury Panel',
                        'highlight' => true,
                    ],
                    [
                        'time' => '11:30 AM – 12:45 PM',
                        'title' => 'People’s Choice Voting & Interactive Prototype Showcase',
                        'location' => 'Central Plaza Gallery',
                        'type' => 'Public Voting',
                        'speaker' => 'Open Visitor Voting via Exhibition Web App',
                    ],
                    [
                        'time' => '02:00 PM – 04:30 PM',
                        'title' => 'Grand Closing Ceremony & Prestigious Award Presentation',
                        'location' => 'Main Auditorium',
                        'type' => 'Award Ceremony',
                        'speaker' => 'Conferred by UPSI Vice-Chancellor & Industry Dignitaries',
                        'highlight' => true,
                    ],
                    [
                        'time' => '04:30 PM – 05:30 PM',
                        'title' => 'Official Photo Session, Media Interviews & Booth Teardown',
                        'location' => 'Historical SITC Courtyard',
                        'type' => 'Celebration',
                        'speaker' => 'Winners, Supervisors & Media Partners',
                    ],
                ],
            ],
        ];

        $awards = [
            [
                'title' => 'IERIICH 13 Grand Champion Trophy',
                'category' => 'Overall Best Final Year Project',
                'prize' => 'RM 2,500 Cash + Prestige Championship Trophy + Incubation Grant Fast-Track',
                'desc' => 'Conferred upon the single most outstanding final year project across all departments demonstrating exceptional novelty, rigorous methodology, robust technical architecture, and undeniable real-world commercial impact.',
                'badge' => 'Highest Honor',
                'color' => 'amber',
            ],
            [
                'title' => 'Gold Medal of Innovation',
                'category' => 'Top 10% in Each Track',
                'prize' => 'Gold Medallion + Official Laureate Certificate of Distinction',
                'desc' => 'Awarded to projects attaining 85% or above across judging rubrics, exhibiting master-level execution and exemplary presentation.',
                'badge' => 'Score 85%+',
                'color' => 'yellow',
            ],
            [
                'title' => 'Dean’s Meta-Tech Industry Choice Award',
                'category' => 'Industry Endorsement',
                'prize' => 'RM 1,000 Industry Cash Prize + Direct Venture Incubation Mentorship',
                'desc' => 'Voted by external corporate and government industry evaluators for immediate commercialization readiness and corporate hiring interest.',
                'badge' => 'Industry Choice',
                'color' => 'slate',
            ],
            [
                'title' => 'Silver & Bronze Medal Accolades',
                'category' => 'Excellence in Engineering',
                'prize' => 'Silver/Bronze Medallion + University Certificate',
                'desc' => 'Recognizing commendable technical depth, systematic validation, and high-quality prototype delivery by student research cohorts.',
                'badge' => 'Score 70% – 84%',
                'color' => 'zinc',
            ],
        ];

        $judges = [
            [
                'name' => 'Prof. Ir. Dr. Mohd Faizal',
                'role' => 'Chief Academic Evaluator',
                'org' => 'Faculty of Engineering & Technology',
                'spec' => 'Autonomous Robotics & AI',
            ],
            [
                'name' => 'Ts. Dr. Shariffah Azura',
                'role' => 'Industry Jury Chair',
                'org' => 'MDEC / Tech Ecosystems',
                'spec' => 'Digital Economy & Cloud Systems',
            ],
            [
                'name' => 'Ir. David Wong',
                'role' => 'Venture & Commercialization Judge',
                'org' => 'Cradle Fund / Tech Venture Partner',
                'spec' => 'Seed Funding & IP Commercialization',
            ],
            [
                'name' => 'Dr. Noor Hazlina binti Mansor',
                'role' => 'Human-Centric & Edutech Panel',
                'org' => 'Council of Creative Multimedia',
                'spec' => 'HCI, Serious Games & Neuro-Accessibility',
            ],
        ];

        $downloads = [
            [
                'title' => 'Participant Exhibition Handbook',
                'file_type' => 'PDF Document',
                'size' => '2.4 MB',
                'desc' => 'Comprehensive instructions on booth setup, electrical specifications, pitching times, and rules of conduct.',
                'link' => '#',
            ],
            [
                'title' => 'Official A1 Project Poster Template',
                'file_type' => 'PowerPoint & AI',
                'size' => '14.8 MB',
                'desc' => 'Standardized high-resolution portrait template featuring UPSI and IERIICH 13 branding guidelines.',
                'link' => '#',
            ],
            [
                'title' => 'Jury Scoring Rubric & Criteria',
                'file_type' => 'PDF Document',
                'size' => '1.1 MB',
                'desc' => 'Detailed scoring weights across Novelty (25%), Methodology (30%), Impact (25%), and Pitch (20%).',
                'link' => '#',
            ],
            [
                'title' => 'Dewan SITC Floor Plan & Booth Allocation',
                'file_type' => 'PDF Blueprint',
                'size' => '3.5 MB',
                'desc' => 'High-resolution floor layout showing Zones A to D, electrical distribution points, and stage access.',
                'link' => '#',
            ],
        ];

        $faqs = [
            [
                'q' => 'What is IERIICH 13 and what is its role at UPSI?',
                'a' => 'IERIICH 13 (International Exhibition of Research, Invention, Innovation, Creativity & Humanities) is the premier flagship final year project (FYP) and research convention organized by Fakulti Komputeran & Meta-Teknologi (META), Universiti Pendidikan Sultan Idris. It provides a formal academic and industrial evaluation platform for graduating students and researchers to showcase working prototypes, peer-reviewed research, and commercial software solutions.',
            ],
            [
                'q' => 'Where is the exhibition held and how do visitors gain entry?',
                'a' => 'The exhibition takes place at Dewan SITC (SITC Hall), Kampus Sultan Abdul Jalil Shah, Universiti Pendidikan Sultan Idris, Tanjung Malim, Perak from 4th to 6th January 2026. Entry is completely free and open to students, academics, school delegations, industry partners, and tech recruiters.',
            ],
            [
                'q' => 'How are projects evaluated and what awards are presented?',
                'a' => 'Each project is evaluated by a mixed panel of senior academic professors and external industry leaders using an accredited 4-criteria rubric: Novelty & Originality (25%), Technical Methodology & Engineering Quality (30%), Commercial Applicability & Social Impact (25%), and Oral Pitch & Live Demonstration (20%). Top-tier projects are awarded the IERIICH Grand Champion Trophy, Gold, Silver, and Bronze Medals, as well as the Dean’s Meta-Tech Industry Choice Award.',
            ],
            [
                'q' => 'What facilities and hardware are provided at each booth?',
                'a' => 'Each confirmed booth is supplied with a 3x2 ft presentation table, 2 ergonomic chairs, one dedicated 240V/13A power point, a booth identification header board, and an A1 vertical display easel. High-speed campus Wi-Fi (UPSI-WiFi & Eduroam) is available across the hall.',
            ],
            [
                'q' => 'Can industry representatives arrange interviews or commercialization meetings with student teams?',
                'a' => 'Yes. Industry recruiters, venture capitalists, and incubation scouts may schedule direct one-on-one sessions with any project team by visiting the Secretariat VIP Lounge at SITC Hall or by emailing fskik.ieriich@upsi.edu.my.',
            ],
        ];

        return view('welcome', compact('event', 'stats', 'tracks', 'projects', 'schedule', 'awards', 'judges', 'downloads', 'faqs'));
    }
}
