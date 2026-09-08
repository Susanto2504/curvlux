<!DOCTYPE html>

    <html class="scroll-smooth" lang="id">
    <head>
        <meta charset="utf-8"/>
        <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
        <title>CURVLUX</title>
        <!-- Tailwind CSS  -->
        @vite(['resources/css/app.css'])
        <!-- Google Fonts: Bebas Neue, Montserrat, Inter -->
        <link href="https://fonts.googleapis.com" rel="preconnect"/>
        <link crossorigin="" href="https://fonts.gstatic.com" rel="preconnect"/>
        <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&amp;family=Inter:wght@300;400;500;600;700;800&amp;family=Montserrat:wght@700;800;900&amp;display=swap" rel="stylesheet"/>

        <!-- FontAwesome for Icons -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" rel="stylesheet"/>
        
        <!-- Core Theme & Custom Styles -->
        <style data-purpose="base-styling">
            html, body {
                -ms-overflow-style: none;  /* IE dan Edge */
                scrollbar-width: none;  /* Firefox */
            }
            html::-webkit-scrollbar, 
            body::-webkit-scrollbar {
                display: none; /* Chrome, Safari, dan Opera */
            }
            
            body {
            background-color: #0b0b0b;
            color: #ffffff;
            font-family: 'Inter', sans-serif;
            overflow-x: hidden;
            }
            .font-brand {
            font-family: 'Bebas Neue', cursive, sans-serif;
            letter-spacing: 1.5px;
            }
            .font-title {
            font-family: 'Montserrat', sans-serif;
            }
            /* Hide scrollbar for clean horizontal scrolling */
            .no-scrollbar::-webkit-scrollbar {
            display: none;
            }
            .no-scrollbar {
            -ms-overflow-style: none;
            scrollbar-width: none;
            }
            .text-shadow-netflix {
            text-shadow: 2px 2px 8px rgba(0, 0, 0, 0.9), 0 0 20px rgba(229, 9, 20, 0.4);
            }
            .card-zoom {
            transition: transform 0.3s cubic-bezier(0.25, 1, 0.5, 1), box-shadow 0.3s ease;
            }
            .card-zoom:hover {
            transform: scale(1.05) translateY(-6px);
            box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.8), 0 10px 10px -5px rgba(229, 9, 20, 0.3);
            z-index: 20;
            }

            .no-scrollbar::-webkit-scrollbar {
            display: none;
            }
            .no-scrollbar {
            -ms-overflow-style: none;
            scrollbar-width: none;
            }
        </style>

        <!-- Animated Badge & Glow Styles -->
        <style data-purpose="badge-and-glow">
            .glow-red {
            box-shadow: 0 0 25px -5px rgba(229, 9, 20, 0.6);
            }
            .top10-badge {
            background: linear-gradient(135deg, #e50914 0%, #b81d24 100%);
            }
        </style>
    </head>

    <body class="bg-netflixBlack text-gray-100 min-h-screen selection:bg-netflixRed selection:text-white">
        {{$slot}}
    </body>

</html>