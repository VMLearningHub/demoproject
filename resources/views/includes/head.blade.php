<head>
    <meta charset="utf-8">
    <title>demo project</title>
    <!-- Description, Keywords and Author -->
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- Styles -->
    <!-- Bootstrap CSS -->
    <link href="{{ asset('public/assets/css/bootstrap.min.css') }}" rel="stylesheet">	
    <!-- Animate CSS -->
    <link href="{{ asset('public/assets/css/animate.min.css') }}" rel="stylesheet">
    <!-- Basic stylesheet -->
    <link rel="stylesheet" href="{{ asset('public/assets/css/owl.carousel.css') }}">
    <!-- Font awesome CSS -->
    <link href="{{ asset('public/assets/css/font-awesome.min.css') }}" rel="stylesheet">		
    <!-- Custom CSS -->
    <link href="{{ asset('public/assets/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('public/assets/css/style-color.css') }}" rel="stylesheet">
    @stack('links')
	@stack('style')
</head>