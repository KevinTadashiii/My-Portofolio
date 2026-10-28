<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Portfolio content manifest
    |--------------------------------------------------------------------------
    |
    | Single source of truth for everything the page and the terminal show.
    | The Blade views and the client side terminal both read from this file,
    | so a change here updates the desk, the sections and the terminal at once.
    |
    */

    'profile' => [
        'name' => 'Muhammad Akbar Kevin Kanigara',
        'role' => 'Software Engineering Student (SMKN 2 Bandung — RPL)',
        'location' => 'Bandung, Indonesia',
        'city' => 'Bandung',
        'handle' => 'kevin@desk',
        'tagline' => 'Always learning, always building.',
        'github' => 'https://github.com/KevinTadashiii',
        'email' => 'kevintadashiii@gmail.com',
    ],

    'about' => [
        'paragraphs' => [
            'It started in 6th grade — I wanted to make a game that would get everyone\'s attention. Turned out, the skill I needed most wasn\'t art or design, but programming. That was the entry point.',
            'I didn\'t stick with game development (the art side was a wall I couldn\'t climb), but I fell in love with the code itself. From 7th to 8th grade, I went deep into low-level programming — C, C++, understanding how memory and machines actually work.',
            'By 9th grade, the scope widened. Full-stack development became the playground: JavaScript, TypeScript, Linux, Docker, and now AI. Today I\'m a Software Engineering student at SMKN 2 Bandung (RPL), still chasing the same feeling — building things that work, understanding them all the way down.',
        ],
        'links' => [
            ['label' => 'GitHub', 'value' => '@KevinTadashiii', 'url' => 'https://github.com/KevinTadashiii'],
            ['label' => 'Instagram', 'value' => '@bayabaytjn_', 'url' => 'https://www.instagram.com/bayabaytjn_'],
        ],
    ],

    /*
    | Projects only appear publicly once the title, the details and the status
    | have been confirmed by the owner. Nothing is published automatically, and
    | an unconfirmed entry stays out of this array instead of being shown with
    | a warning label. See the README for the steps to add one.
    */
    'projects' => [
        // Add your projects here when ready. Example:
        // 'project-slug' => [
        //     'title' => 'Project Title',
        //     'summary' => 'One-line description of what it does.',
        //     'stack' => ['Laravel', 'Tailwind CSS', 'PostgreSQL'],
        //     'status' => 'in_progress', // or 'complete'
        //     'url' => 'https://github.com/KevinTadashiii/project-slug',
        // ],
    ],

    'skills' => [
        'active' => [
            'C', 'C++', 'Python', 'Linux', 'JavaScript', 'TypeScript',
            'Docker', 'AI/ML', 'Git', 'HTML & CSS', 'SQL', 'Bash',
        ],
        'learning' => [
            'Laravel', 'Flutter', 'Next.js', 'Express.js', 'Tailwind CSS',
            'PostgreSQL', 'Redis', 'CI/CD', 'System Design',
        ],
    ],

    'tools' => [
        [
            'key' => 'cpp',
            'label' => 'C/C++',
            'icons' => ['cplusplus'],
            'skills' => ['C', 'C++', 'Memory Management', 'Pointers', 'STL'],
        ],
        [
            'key' => 'python',
            'label' => 'Python',
            'icons' => ['python'],
            'skills' => ['Python', 'AI/ML', 'Automation', 'Data Processing'],
        ],
        [
            'key' => 'linux',
            'label' => 'Linux',
            'icons' => ['linux'],
            'skills' => ['Linux', 'Bash', 'SSH', 'File Permissions', 'System Admin'],
        ],
        [
            'key' => 'docker',
            'label' => 'Docker',
            'icons' => ['docker'],
            'skills' => ['Docker', 'Containers', 'Docker Compose', 'Container Orchestration'],
        ],
        [
            'key' => 'javascript',
            'label' => 'JavaScript/TypeScript',
            'icons' => ['javascript', 'typescript'],
            'skills' => ['JavaScript', 'TypeScript', 'Node.js', 'npm', 'ES6+'],
        ],
        [
            'key' => 'git',
            'label' => 'Git',
            'icons' => ['git'],
            'skills' => ['Git', 'Branching', 'Merge Conflicts', 'Diffing', 'GitHub'],
        ],
    ],

    'journey' => [
        [
            'grade' => 'Grade 6',
            'title' => 'The game that started it all',
            'detail' => 'Wanted to build a game to impress everyone. Discovered programming was the required skill. The game never shipped, but the code stuck.',
        ],
        [
            'grade' => 'Grade 7–8',
            'title' => 'Low-level foundations',
            'detail' => 'C and C++ became daily drivers. Pointers, memory management, compilation — the unglamorous layer that makes everything else possible. Learned to read errors instead of fearing them.',
        ],
        [
            'grade' => 'Grade 9–10',
            'title' => 'Full-stack expansion',
            'detail' => 'JavaScript, TypeScript, Node.js, databases, Linux servers, Docker. The stack grew horizontally. First deployments, first real users, first production bugs at 2 AM.',
        ],
        [
            'grade' => 'Grade 11',
            'title' => 'Software Engineering Student (RPL)',
            'detail' => 'SMKN 2 Bandung — Rekayasa Perangkat Lunak. Structured learning, team projects, and the shift from "it works" to "it\'s maintainable." Still building. Still learning.',
        ],
    ],

    'contact' => [
        'location' => 'Bandung, Indonesia',
        'links' => [
            [
                'label' => 'GitHub',
                'value' => '@KevinTadashiii',
                'url' => 'https://github.com/KevinTadashiii',
            ],
            [
                'label' => 'Email',
                'value' => 'kevintadashiii@gmail.com',
                'url' => 'mailto:kevintadashiii@gmail.com',
            ],
            [
                'label' => 'Instagram',
                'value' => '@bayabaytjn_',
                'url' => 'https://www.instagram.com/bayabaytjn_',
            ],
        ],
    ],

    'terminal' => [
        'prompt' => 'kevin@desk:~$',
        'suggestions' => ['help', 'whoami', 'about', 'projects', 'skills', 'journey', 'contact'],
        'boot' => [
            ['[ 0.00 ] booting kevin@desk ...', 'muted'],
            ['[ 0.31 ] mounting /home/kevin/projects ..... ok', 'muted'],
            ['[ 0.48 ] coffee temperature ................. nominal', 'muted'],
            ['[ 0.62 ] loading portfolio .................... ok', 'muted'],
            ['', 'default'],
            ['Muhammad Akbar Kevin Kanigara — Software Engineering Student (Bandung)', 'default'],
            ['Type "help" for the list of commands.', 'muted'],
        ],
    ],

];