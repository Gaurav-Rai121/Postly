<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Postly Admin Dashboard</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.9.1/chart.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/feather-icons/4.29.0/feather.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.js"></script>
    <style>
        :root {
            --primary: #6366f1;
            --primary-dark: #4f46e5;
            --secondary: #10b981;
            --dark-bg: #0f172a;
            --darker-bg: #0a1122;
            --card-bg: #1e293b;
            --text-primary: #f8fafc;
            --text-secondary: #94a3b8;
            --border-color: #334155;
        }
        
        body {
            background-color: var(--dark-bg);
            color: var(--text-primary);
            font-family: 'Inter', sans-serif;
        }
        
        .sidebar {
            background-color: var(--darker-bg);
            border-right: 1px solid var(--border-color);
            transition: all 0.3s;
        }
        
        .sidebar-link {
            display: flex;
            align-items: center;
            padding: 0.75rem 1rem;
            color: var(--text-secondary);
            border-radius: 0.5rem;
            margin: 0.25rem 0;
            transition: all 0.2s;
        }
        
        .sidebar-link:hover, .sidebar-link.active {
            background-color: rgba(99, 102, 241, 0.1);
            color: var(--primary);
        }
        
        .sidebar-link.active {
            border-left: 3px solid var(--primary);
        }
        
        .sidebar-link svg {
            margin-right: 0.75rem;
        }
        
        .card {
            background-color: var(--card-bg);
            border-radius: 0.75rem;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            transition: transform 0.2s, box-shadow 0.2s;
        }
        
        .card:hover {
            transform: translateY(-4px);
            box-shadow: 0 10px 15px rgba(0, 0, 0, 0.1);
        }
        
        .stat-card {
            position: relative;
            overflow: hidden;
        }
        
        .stat-card .icon {
            position: absolute;
            right: 1rem;
            top: 1rem;
            opacity: 0.2;
            font-size: 2.5rem;
        }
        
        .table-container {
            border-radius: 0.75rem;
            overflow: hidden;
        }
        
        table {
            width: 100%;
        }
        
        table th, table td {
            padding: 1rem;
            text-align: left;
        }
        
        table th {
            background-color: var(--darker-bg);
            font-weight: 600;
        }
        
        table tr {
            border-bottom: 1px solid var(--border-color);
        }
        
        table tr:hover {
            background-color: rgba(99, 102, 241, 0.05);
        }
        
        .badge {
            padding: 0.25rem 0.5rem;
            border-radius: 9999px;
            font-size: 0.75rem;
            font-weight: 500;
        }
        
        .badge-green {
            background-color: rgba(16, 185, 129, 0.2);
            color: #10b981;
        }
        
        .badge-yellow {
            background-color: rgba(245, 158, 11, 0.2);
            color: #f59e0b;
        }
        
        .badge-red {
            background-color: rgba(239, 68, 68, 0.2);
            color: #ef4444;
        }
        
        .badge-blue {
            background-color: rgba(59, 130, 246, 0.2);
            color: #3b82f6;
        }
        
        .badge-purple {
            background-color: rgba(139, 92, 246, 0.2);
            color: #8b5cf6;
        }
        
        .user-avatar {
            width: 2.5rem;
            height: 2.5rem;
            border-radius: 9999px;
            object-fit: cover;
        }
        
        .header-search {
            background-color: var(--card-bg);
            border: 1px solid var(--border-color);
            border-radius: 9999px;
        }
        
        .custom-scrollbar::-webkit-scrollbar {
            width: 6px;
        }
        
        .custom-scrollbar::-webkit-scrollbar-track {
            background: var(--dark-bg);
        }
        
        .custom-scrollbar::-webkit-scrollbar-thumb {
            background-color: var(--border-color);
            border-radius: 20px;
        }
        
        .nav-indicator {
            height: 3px;
            width: 100%;
            background-color: transparent;
            position: absolute;
            bottom: 0;
            left: 0;
            transition: all 0.3s;
        }
        
        .nav-link.active .nav-indicator {
            background-color: var(--primary);
        }
        
        .toggle-switch {
            position: relative;
            display: inline-block;
            width: 50px;
            height: 24px;
        }
        
        .toggle-switch input {
            opacity: 0;
            width: 0;
            height: 0;
        }
        
        .toggle-slider {
            position: absolute;
            cursor: pointer;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-color: var(--border-color);
            transition: .4s;
            border-radius: 34px;
        }
        
        .toggle-slider:before {
            position: absolute;
            content: "";
            height: 16px;
            width: 16px;
            left: 4px;
            bottom: 4px;
            background-color: white;
            transition: .4s;
            border-radius: 50%;
        }
        
        input:checked + .toggle-slider {
            background-color: var(--primary);
        }
        
        input:checked + .toggle-slider:before {
            transform: translateX(26px);
        }
        
        .pulse {
            animation: pulse 2s infinite;
        }
        
        @keyframes pulse {
            0% {
                transform: scale(0.95);
                box-shadow: 0 0 0 0 rgba(99, 102, 241, 0.7);
            }
            
            70% {
                transform: scale(1);
                box-shadow: 0 0 0 10px rgba(99, 102, 241, 0);
            }
            
            100% {
                transform: scale(0.95);
                box-shadow: 0 0 0 0 rgba(99, 102, 241, 0);
            }
        }
        
        .dropdown-content {
            display: none;
            position: absolute;
            right: 0;
            top: 100%;
            background-color: var(--card-bg);
            min-width: 200px;
            box-shadow: 0 8px 16px rgba(0,0,0,0.2);
            z-index: 1;
            border-radius: 0.5rem;
            border: 1px solid var(--border-color);
        }
        
        .dropdown:hover .dropdown-content {
            display: block;
        }
    </style>
</head>
<body class="min-h-screen">
    <div class="flex h-screen overflow-hidden">
        <!-- Sidebar -->
        <aside class="sidebar w-64 h-full fixed inset-y-0 left-0 z-10 flex flex-col">
            <div class="px-4 py-6 flex items-center justify-between">
                <div class="flex items-center">
                    <svg class="h-8 w-8 text-primary" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M12 2L2 7l10 5 10-5-10-5z"></path>
                        <path d="M2 17l10 5 10-5"></path>
                        <path d="M2 12l10 5 10-5"></path>
                    </svg>
                    <h1 class="ml-3 text-xl font-bold">Postly <span class="text-indigo-400">Admin</span></h1>
                </div>
                <button class="md:hidden focus:outline-none">
                    <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                    </svg>
                </button>
            </div>
            
            <div class="px-4 py-2">
                <div class="relative">
                    <span class="absolute inset-y-0 left-0 pl-3 flex items-center">
                        <svg class="h-5 w-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                        </svg>
                    </span>
                    <input type="text" class="w-full pl-10 pr-4 py-2 rounded-lg bg-gray-800 text-gray-300 placeholder-gray-500 focus:outline-none focus:ring-2 focus:ring-indigo-500" placeholder="Search...">
                </div>
            </div>
            
            <nav class="mt-6 px-2 flex-1 space-y-1 flex flex-col custom-scrollbar overflow-y-auto">
                <a href="#" class="sidebar-link active">
                    <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path>
                    </svg>
                    <span>Dashboard</span>
                </a>
                <a href="#" class="sidebar-link">
                    <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                    </svg>
                    <span>Users</span>
                </a>
                <a href="#" class="sidebar-link">
                    <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 10h.01M12 10h.01M16 10h.01M9 16H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-5l-5 5v-5z"></path>
                    </svg>
                    <span>Feedback</span>
                </a>
                <a href="#" class="sidebar-link">
                    <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01"></path>
                    </svg>
                    <span>Posts</span>
                </a>
                <a href="#" class="sidebar-link">
                    <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                    <span>Reports</span>
                </a>
                <a href="#" class="sidebar-link">
                    <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                    </svg>
                    <span>Beta Feedback</span>
                </a>
                <a href="#" class="sidebar-link">
                    <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"></path>
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                    </svg>
                    <span>Settings</span>
                </a>
                
                <div class="mt-auto">
                    <hr class="border-gray-700 my-4">
                    <a href="#" class="sidebar-link">
                        <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                        <span>Help & Support</span>
                    </a>
                    <a href="#" class="sidebar-link">
                        <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"></path>
                        </svg>
                        <span>Logout</span>
                    </a>
                </div>
            </nav>
        </aside>

        <!-- Main Content -->
        <main class="ml-64 flex-1 overflow-y-auto custom-scrollbar">
            <!-- Top Navigation -->
            <header class="bg-gray-800 shadow-md">
                <div class="flex items-center justify-between px-6 py-4">
                    <div class="flex items-center space-x-4">
                        <h2 class="text-xl font-bold">Dashboard Overview</h2>
                        <div class="hidden md:flex items-center space-x-2">
                            <span class="relative h-3 w-3 flex">
                                <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-green-400 opacity-75"></span>
                                <span class="relative inline-flex rounded-full h-3 w-3 bg-green-500"></span>
                            </span>
                            <span class="text-sm text-green-400">Live Updates</span>
                        </div>
                    </div>
                    
                    <div class="flex items-center space-x-4">
                        <div class="relative hidden md:block">
                            <input type="text" class="header-search w-64 py-2 pl-10 pr-4 text-sm text-gray-300 placeholder-gray-500 focus:outline-none focus:ring-2 focus:ring-indigo-500" placeholder="Search anything...">
                            <div class="absolute left-3 top-2.5">
                                <svg class="h-4 w-4 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                                </svg>
                            </div>
                        </div>
                        
                        <button class="p-1.5 rounded-full bg-gray-700 hover:bg-gray-600 focus:outline-none">
                            <svg class="h-5 w-5 text-gray-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9"></path>
                            </svg>
                            <span class="absolute top-3 right-16 h-2 w-2 rounded-full bg-red-500"></span>
                        </button>
                        
                        <div class="relative dropdown">
                            <button class="flex items-center space-x-3 focus:outline-none">
                                <div class="w-8 h-8 rounded-full bg-indigo-500 flex items-center justify-center text-white font-semibold">A</div>
                                <span class="hidden md:block font-medium">Admin User</span>
                                <svg class="h-4 w-4 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                                </svg>
                            </button>
                            
                            <div class="dropdown-content">
                                <div class="p-4 border-b border-gray-700">
                                    <p class="font-medium">Admin User</p>
                                    <p class="text-sm text-gray-400">admin@postly.com</p>
                                </div>
                                <a href="#" class="block px-4 py-2 text-sm hover:bg-gray-700">Profile</a>
                                <a href="#" class="block px-4 py-2 text-sm hover:bg-gray-700">Account Settings</a>
                                <a href="#" class="block px-4 py-2 text-sm hover:bg-gray-700">Help Center</a>
                                <div class="border-t border-gray-700 px-4 py-2 flex items-center justify-between">
                                    <span class="text-sm">Dark Mode</span>
                                    <label class="toggle-switch">
                                        <input type="checkbox" checked>
                                        <span class="toggle-slider"></span>
                                    </label>
                                </div>
                                <div class="border-t border-gray-700">
                                    <a href="#" class="block px-4 py-2 text-sm text-red-400 hover:bg-gray-700">Logout</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Sub Navigation -->
                <div class="px-6 flex items-center space-x-8 border-b border-gray-700 overflow-x-auto">
                    <a href="#" class="nav-link relative py-4 px-1 text-sm font-medium text-indigo-400 active">
                        Overview
                        <span class="nav-indicator"></span>
                    </a>
                    <a href="#" class="nav-link relative py-4 px-1 text-sm font-medium text-gray-400 hover:text-gray-200">
                        Analytics
                        <span class="nav-indicator"></span>
                    </a>
                    <a href="#" class="nav-link relative py-4 px-1 text-sm font-medium text-gray-400 hover:text-gray-200">
                        User Activity
                        <span class="nav-indicator"></span>
                    </a>
                    <a href="#" class="nav-link relative py-4 px-1 text-sm font-medium text-gray-400 hover:text-gray-200">
                        Content Management
                        <span class="nav-indicator"></span>
                    </a>
                    <a href="#" class="nav-link relative py-4 px-1 text-sm font-medium text-gray-400 hover:text-gray-200">
                        Beta Program
                        <span class="nav-indicator"></span>
                    </a>
                    <a href="#" class="nav-link relative py-4 px-1 text-sm font-medium text-gray-400 hover:text-gray-200">
                        Reports
                        <span class="nav-indicator"></span>
                    </a>
                </div>
            </header>

            <!-- Dashboard Content -->
            <div class="px-6 py-8">
                <!-- Welcome Section -->
                <div class="bg-gradient-to-r from-indigo-600 to-purple-600 rounded-xl p-6 mb-8 flex items-center justify-between shadow-lg">
                    <div>
                        <h2 class="text-2xl font-bold text-white mb-2">Welcome back, Admin!</h2>
                        <p class="text-indigo-100 max-w-xl">Your platform is growing! You have 24 new user registrations and 58 new feedback items since your last login.</p>
                        <button class="mt-4 bg-white text-indigo-600 px-4 py-2 rounded-lg font-medium hover:bg-indigo-50 transition-colors duration-200">Weekly Report</button>
                    </div>
                    <div class="hidden lg:block">
                        <svg class="w-48 h-48 text-white opacity-20" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
                            <circle cx="9" cy="7" r="4"></circle>
                            <path d="M23 21v-2a4 4 0 0 0-3-3.87"></path>
                            <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                        </svg>
                    </div>
                </div>

                <!-- Stats Cards -->
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
                    <div class="card stat-card p-6">
                        <div class="text-xl font-bold text-gray-400 mb-2">Total Users</div>
                        <div class="text-3xl font-bold">24,521</div>
                        <div class="flex items-center mt-2">
                            <span class="text-green-400 flex items-center text-sm">
                                <svg class="h-4 w-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"></path>
                                </svg>
                                +12.5%
                            </span>
                            <span class="text-gray-500 text-sm ml-2">vs last month</span>
                        </div>
                        <div class="icon">
                            <svg class="h-14 w-14 text-indigo-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"></path>
                            </svg>
                        </div>
                    </div>
                    
                    <div class="card stat-card p-6">
                        <div class="text-xl font-bold text-gray-400 mb-2">Total Posts</div>
                        <div class="text-3xl font-bold">83,472</div>
                        <div class="flex items-center mt-2">
                            <span class="text-green-400 flex items-center text-sm">
                                <svg class="h-4 w-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"></path>
                                </svg>
                                +8.2%
                            </span>
                            <span class="text-gray-500 text-sm ml-2">vs last month</span>
                        </div>
                        <div class="icon">
                            <svg class="h-14 w-14 text-purple-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z"></path>
                            </svg>
                        </div>
                    </div>
                    
                    <div class="card stat-card p-6">
                        <div class="text-xl font-bold text-gray-400 mb-2">Feedback</div>
                        <div class="text-3xl font-bold">5,784</div>
                        <div class="flex items-center mt-2">
                            <span class="text-red-400 flex items-center text-sm">
                                <svg class="h-4 w-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 17h8m0 0V9m0 8l-8-8-4 4-6-6"></path>
                                </svg>
                                -3.7%
                            </span>
                            <span class="text-gray-500 text-sm ml-2">vs last month</span>
                        </div>
                        <div class="icon">
                            <svg class="h-14 w-14 text-blue-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 10h.01M12 10h.01M16 10h.01M9 16H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-5l-5 5v-5z"></path>
                            </svg>
                        </div>
                    </div>
                    
                    <div class="card stat-card p-6">
                        <div class="text-xl font-bold text-gray-400 mb-2">Active Users</div>
                        <div class="text-3xl font-bold">14,372</div>
                        <div class="flex items-center mt-2">
                            <span class="text-green-400 flex items-center text-sm">
                                <svg class="h-4 w-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"></path>
                                </svg>
                                +22.1%
                            </span>
                            <span class="text-gray-500 text-sm ml-2">vs last month</span>
                        </div>
                        <div class="icon">
                            <svg class="h-14 w-14 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5.121 17.804A13.937 13.937 0 0112 16c2.5 0 4.847.655 6.879 1.804M15 10a3 3 0 11-6 0 3 3 0 016 0zm6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                        </div>
                    </div>
                </div>

                <!-- Main Content Grid -->
                <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
                    <!-- Left Column -->
                    <div class="lg:col-span-2 space-y-8">
                        <!-- Chart Card -->
                        <div class="card p-6">
                            <div class="flex items-center justify-between mb-6">
                                <h3 class="text-lg font-bold">User Growth Analytics</h3>
                                <div class="flex items-center space-x-2">
                                    <button class="px-3 py-1 text-sm rounded-lg bg-indigo-500 text-white hover:bg-indigo-600 transition-colors">Daily</button>
                                    <button class="px-3 py-1 text-sm rounded-lg bg-gray-700 text-gray-300 hover:bg-gray-600 transition-colors">Weekly</button>
                                    <button class="px-3 py-1 text-sm rounded-lg bg-gray-700 text-gray-300 hover:bg-gray-600 transition-colors">Monthly</button>
                                </div>
                            </div>
                            <div class="relative h-80">
                                <canvas id="userGrowthChart"></canvas>
                            </div>
                        </div>
                        
                        <!-- Recent Posts -->
                        <div class="card p-6">
                            <div class="flex items-center justify-between mb-6">
                                <h3 class="text-lg font-bold">Recent Posts</h3>
                                <button class="text-sm text-indigo-400 hover:text-indigo-300">View All</button>
                            </div>
                            <div class="overflow-x-auto">
                                <table class="min-w-full">
                                    <thead>
                                        <tr>
                                            <th>Title</th>
                                            <th>Author</th>
                                            <th>Category</th>
                                            <th>Date</th>
                                            <th>Status</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="flex items-center space-x-3">
                                                <div class="w-10 h-10 rounded bg-purple-200 flex items-center justify-center text-purple-700">📝</div>
                                                <span class="font-medium">The Best Coffee Shops in Town</span>
                                            </td>
                                            <td>Sarah Johnson</td>
                                            <td>Food & Drink</td>
                                            <td>Apr 28, 2025</td>
                                            <td><span class="badge badge-green">Published</span></td>
                                            <td>
                                                <div class="flex space-x-2">
                                                    <button class="p-1 text-gray-400 hover:text-gray-200">
                                                        <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z"></path>
                                                        </svg>
                                                    </button>
                                                    <button class="p-1 text-gray-400 hover:text-gray-200">
                                                        <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path>
                                                        </svg>
                                                    </button>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="flex items-center space-x-3">
                                                <div class="w-10 h-10 rounded bg-blue-200 flex items-center justify-center text-blue-700">🛒</div>
                                                <span class="font-medium">Product Review: Latest Tech Gadgets</span>
                                            </td>
                                            <td>Mike Chen</td>
                                            <td>Technology</td>
                                            <td>Apr 27, 2025</td>
                                            <td><span class="badge badge-green">Published</span></td>
                                            <td>
                                                <div class="flex space-x-2">
                                                    <button class="p-1 text-gray-400 hover:text-gray-200">
                                                        <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z"></path>
                                                        </svg>
                                                    </button>
                                                    <button class="p-1 text-gray-400 hover:text-gray-200">
                                                        <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path>
                                                        </svg>
                                                    </button>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="flex items-center space-x-3">
                                                <div class="w-10 h-10 rounded bg-green-200 flex items-center justify-center text-green-700">🏙️</div>
                                                <span class="font-medium">10 Hidden Gems in the City</span>
                                            </td>
                                            <td>Alex Rodriguez</td>
                                            <td>Travel</td>
                                            <td>Apr 25, 2025</td>
                                            <td><span class="badge badge-blue">Under Review</span></td>
                                            <td>
                                                <div class="flex space-x-2">
                                                    <button class="p-1 text-gray-400 hover:text-gray-200">
                                                        <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z"></path>
                                                        </svg>
                                                    </button>
                                                    <button class="p-1 text-gray-400 hover:text-gray-200">
                                                        <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path>
                                                        </svg>
                                                    </button>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="flex items-center space-x-3">
                                                <div class="w-10 h-10 rounded bg-red-200 flex items-center justify-center text-red-700">🏋️</div>
                                                <span class="font-medium">5 Fitness Tips for Busy Professionals</span>
                                            </td>
                                            <td>Emma Wilson</td>
                                            <td>Health & Fitness</td>
                                            <td>Apr 24, 2025</td>
                                            <td><span class="badge badge-yellow">Draft</span></td>
                                            <td>
                                                <div class="flex space-x-2">
                                                    <button class="p-1 text-gray-400 hover:text-gray-200">
                                                        <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z"></path>
                                                        </svg>
                                                    </button>
                                                    <button class="p-1 text-gray-400 hover:text-gray-200">
                                                        <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path>
                                                        </svg>
                                                    </button>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="flex items-center space-x-3">
                                                <div class="w-10 h-10 rounded bg-yellow-200 flex items-center justify-center text-yellow-700">👨‍💻</div>
                                                <span class="font-medium">Learning to Code in 30 Days</span>
                                            </td>
                                            <td>David Park</td>
                                            <td>Education</td>
                                            <td>Apr 23, 2025</td>
                                            <td><span class="badge badge-red">Reported</span></td>
                                            <td>
                                                <div class="flex space-x-2">
                                                    <button class="p-1 text-gray-400 hover:text-gray-200">
                                                        <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z"></path>
                                                        </svg>
                                                    </button>
                                                    <button class="p-1 text-gray-400 hover:text-gray-200">
                                                        <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path>
                                                        </svg>
                                                    </button>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                    <!-- Right Column -->
                    <div class="space-y-8">
                        <!-- Beta Feedback Card -->
                        <div class="card p-6">
                            <div class="flex items-center justify-between mb-6">
                                <h3 class="text-lg font-bold">Beta Feedback</h3>
                                <button class="text-sm text-indigo-400 hover:text-indigo-300">View All</button>
                            </div>
                            
                            <div class="space-y-4">
                                <div class="p-4 bg-gray-800 rounded-lg">
                                    <div class="flex items-center justify-between">
                                        <div class="flex items-center space-x-3">
                                            <div class="w-10 h-10 rounded-full bg-indigo-500 flex items-center justify-center text-white font-semibold">JD</div>
                                            <div>
                                                <h4 class="font-medium">John Doe</h4>
                                                <span class="text-xs text-gray-400">Beta Tester</span>
                                            </div>
                                        </div>
                                        <span class="text-xs text-gray-400">2 hours ago</span>
                                    </div>
                                    <p class="mt-3 text-gray-300">Love the new reaction feature! Would be great if we could customize the emoji options.</p>
                                    <div class="mt-2 flex items-center justify-between">
                                        <div class="flex items-center space-x-4">
                                            <button class="flex items-center text-gray-400 hover:text-indigo-400">
                                                <svg class="h-4 w-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 15l7-7 7 7"></path>
                                                </svg>
                                                <span class="text-xs">5</span>
                                            </button>
                                            <button class="flex items-center text-gray-400 hover:text-red-400">
                                                <svg class="h-4 w-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                                                </svg>
                                                <span class="text-xs">1</span>
                                            </button>
                                        </div>
                                        <span class="text-xs px-2 py-1 bg-indigo-500 text-white rounded-full">New Feature</span>
                                    </div>
                                </div>
                                
                                <div class="p-4 bg-gray-800 rounded-lg">
                                    <div class="flex items-center justify-between">
                                        <div class="flex items-center space-x-3">
                                            <div class="w-10 h-10 rounded-full bg-green-500 flex items-center justify-center text-white font-semibold">MS</div>
                                            <div>
                                                <h4 class="font-medium">Maria Smith</h4>
                                                <span class="text-xs text-gray-400">Beta Tester</span>
                                            </div>
                                        </div>
                                        <span class="text-xs text-gray-400">5 hours ago</span>
                                    </div>
                                    <p class="mt-3 text-gray-300">The dark mode is beautiful but some buttons are hard to see against the background. Consider increasing contrast.</p>
                                    <div class="mt-2 flex items-center justify-between">
                                        <div class="flex items-center space-x-4">
                                            <button class="flex items-center text-gray-400 hover:text-indigo-400">
                                                <svg class="h-4 w-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 15l7-7 7 7"></path>
                                                </svg>
                                                <span class="text-xs">8</span>
                                            </button>
                                            <button class="flex items-center text-gray-400 hover:text-red-400">
                                                <svg class="h-4 w-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                                                </svg>
                                                <span class="text-xs">0</span>
                                            </button>
                                        </div>
                                        <span class="text-xs px-2 py-1 bg-yellow-500 text-white rounded-full">UI/UX</span>
                                    </div>
                                </div>
                                
                                <div class="p-4 bg-gray-800 rounded-lg">
                                    <div class="flex items-center justify-between">
                                        <div class="flex items-center space-x-3">
                                            <div class="w-10 h-10 rounded-full bg-blue-500 flex items-center justify-center text-white font-semibold">RJ</div>
                                            <div>
                                                <h4 class="font-medium">Robert Johnson</h4>
                                                <span class="text-xs text-gray-400">Beta Tester</span>
                                            </div>
                                        </div>
                                        <span class="text-xs text-gray-400">Yesterday</span>
                                    </div>
                                    <p class="mt-3 text-gray-300">App crashes sometimes when uploading multiple images at once from the gallery.</p>
                                    <div class="mt-2 flex items-center justify-between">
                                        <div class="flex items-center space-x-4">
                                            <button class="flex items-center text-gray-400 hover:text-indigo-400">
                                                <svg class="h-4 w-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 15l7-7 7 7"></path>
                                                </svg>
                                                <span class="text-xs">12</span>
                                            </button>
                                            <button class="flex items-center text-gray-400 hover:text-red-400">
                                                <svg class="h-4 w-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                                                </svg>
                                                <span class="text-xs">2</span>
                                            </button>
                                        </div>
                                        <span class="text-xs px-2 py-1 bg-red-500 text-white rounded-full">Bug</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <!-- User Activity -->
                        <div class="card p-6">
                            <div class="flex items-center justify-between mb-6">
                                <h3 class="text-lg font-bold">Recent User Activity</h3>
                                <button class="text-sm text-indigo-400 hover:text-indigo-300">View All</button>
                            </div>
                            
                            <div class="space-y-4">
                                <div class="flex items-center space-x-4">
                                    <div class="relative">
                                        <img src="/api/placeholder/48/48" class="user-avatar" alt="User">
                                        <span class="absolute bottom-0 right-0 w-3 h-3 bg-green-500 rounded-full border-2 border-gray-800"></span>
                                    </div>
                                    <div class="flex-1">
                                        <div class="flex items-center justify-between">
                                            <h4 class="font-medium">Laura Kim</h4>
                                            <span class="text-xs text-gray-400">5 min ago</span>
                                        </div>
                                        <p class="text-sm text-gray-400">Posted a new review on "Tokyo Restaurant"</p>
                                    </div>
                                </div>
                                
                                <div class="flex items-center space-x-4">
                                    <div class="relative">
                                        <img src="/api/placeholder/48/48" class="user-avatar" alt="User">
                                        <span class="absolute bottom-0 right-0 w-3 h-3 bg-gray-500 rounded-full border-2 border-gray-800"></span>
                                    </div>
                                    <div class="flex-1">
                                        <div class="flex items-center justify-between">
                                            <h4 class="font-medium">Carlos Mendez</h4>
                                            <span class="text-xs text-gray-400">25 min ago</span>
                                        </div>
                                        <p class="text-sm text-gray-400">Liked 3 posts from "Tech News"</p>
                                    </div>
                                </div>
                                
                                <div class="flex items-center space-x-4">
                                    <div class="relative">
                                        <img src="/api/placeholder/48/48" class="user-avatar" alt="User">
                                        <span class="absolute bottom-0 right-0 w-3 h-3 bg-green-500 rounded-full border-2 border-gray-800"></span>
                                    </div>
                                    <div class="flex-1">
                                        <div class="flex items-center justify-between">
                                            <h4 class="font-medium">Alicia Brown</h4>
                                            <span class="text-xs text-gray-400">1 hour ago</span>
                                        </div>
                                        <p class="text-sm text-gray-400">Updated profile picture</p>
                                    </div>
                                </div>
                                
                                <div class="flex items-center space-x-4">
                                    <div class="relative">
                                        <img src="/api/placeholder/48/48" class="user-avatar" alt="User">
                                        <span class="absolute bottom-0 right-0 w-3 h-3 bg-gray-500 rounded-full border-2 border-gray-800"></span>
                                    </div>
                                    <div class="flex-1">
                                        <div class="flex items-center justify-between">
                                            <h4 class="font-medium">Mark Thompson</h4>
                                            <span class="text-xs text-gray-400">2 hours ago</span>
                                        </div>
                                        <p class="text-sm text-gray-400">Submitted a new post awaiting approval</p>
                                    </div>
                                </div>
                                
                                <div class="flex items-center space-x-4">
                                    <div class="relative">
                                        <img src="/api/placeholder/48/48" class="user-avatar" alt="User">
                                        <span class="absolute bottom-0 right-0 w-3 h-3 bg-green-500 rounded-full border-2 border-gray-800"></span>
                                    </div>
                                    <div class="flex-1">
                                        <div class="flex items-center justify-between">
                                            <h4 class="font-medium">Sophia Garcia</h4>
                                            <span class="text-xs text-gray-400">3 hours ago</span>
                                        </div>
                                        <p class="text-sm text-gray-400">Commented on "Best Travel Destinations 2025"</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>

    <script>
 // Initialize Feather Icons
document.addEventListener('DOMContentLoaded', function() {
    feather.replace();
    
    // User Growth Chart
    const ctx = document.getElementById('userGrowthChart').getContext('2d');
    
    const gradient = ctx.createLinearGradient(0, 0, 0, 400);
    gradient.addColorStop(0, 'rgba(54, 162, 235, 0.8)');
    gradient.addColorStop(1, 'rgba(54, 162, 235, 0.1)');
    
    const userGrowthChart = new Chart(ctx, {
        type: 'line',
        data: {
            labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
            datasets: [{
                label: 'User Growth',
                data: [65, 78, 90, 115, 130, 160, 185, 190, 210, 250, 290, 320],
                backgroundColor: gradient,
                borderColor: 'rgba(54, 162, 235, 1)',
                borderWidth: 2,
                pointBackgroundColor: '#fff',
                pointBorderColor: 'rgba(54, 162, 235, 1)',
                pointRadius: 4,
                tension: 0.4,
                fill: true
            }]
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
            plugins: {
                legend: {
                    display: false
                },
                tooltip: {
                    mode: 'index',
                    intersect: false,
                    backgroundColor: 'rgba(0, 0, 0, 0.7)',
                    titleColor: '#fff',
                    bodyColor: '#fff',
                    titleFont: {
                        size: 14,
                        weight: 'bold'
                    },
                    bodyFont: {
                        size: 13
                    },
                    padding: 10,
                    displayColors: false
                }
            },
            scales: {
                y: {
                    beginAtZero: true,
                    grid: {
                        color: 'rgba(0, 0, 0, 0.05)'
                    },
                    ticks: {
                        font: {
                            size: 12
                        },
                        color: '#666'
                    }
                },
                x: {
                    grid: {
                        display: false
                    },
                    ticks: {
                        font: {
                            size: 12
                        },
                        color: '#666'
                    }
                }
            }
        }
    });
    
    // Revenue Chart
    const revenueCtx = document.getElementById('revenueChart').getContext('2d');
    
    const revenueGradient = revenueCtx.createLinearGradient(0, 0, 0, 400);
    revenueGradient.addColorStop(0, 'rgba(75, 192, 192, 0.8)');
    revenueGradient.addColorStop(1, 'rgba(75, 192, 192, 0.1)');
    
    const revenueChart = new Chart(revenueCtx, {
        type: 'bar',
        data: {
            labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
            datasets: [{
                label: 'Monthly Revenue',
                data: [12000, 19000, 15000, 17000, 22000, 24000, 25000, 30000, 29000, 32000, 35000, 40000],
                backgroundColor: revenueGradient,
                borderColor: 'rgba(75, 192, 192, 1)',
                borderWidth: 1,
                borderRadius: 5
            }]
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
            plugins: {
                legend: {
                    display: false
                },
                tooltip: {
                    mode: 'index',
                    intersect: false,
                    backgroundColor: 'rgba(0, 0, 0, 0.7)',
                    callbacks: {
                        label: function(context) {
                            return '$ ' + context.parsed.y.toLocaleString();
                        }
                    }
                }
            },
            scales: {
                y: {
                    beginAtZero: true,
                    grid: {
                        color: 'rgba(0, 0, 0, 0.05)'
                    },
                    ticks: {
                        callback: function(value) {
                            return '$ ' + value.toLocaleString();
                        }
                    }
                },
                x: {
                    grid: {
                        display: false
                    }
                }
            }
        }
    });
    
    // Traffic Sources Chart
    const trafficCtx = document.getElementById('trafficSourcesChart').getContext('2d');
    
    const trafficSourcesChart = new Chart(trafficCtx, {
        type: 'doughnut',
        data: {
            labels: ['Organic', 'Social', 'Direct', 'Referral', 'Email'],
            datasets: [{
                data: [35, 25, 20, 15, 5],
                backgroundColor: [
                    'rgba(54, 162, 235, 0.8)',
                    'rgba(255, 99, 132, 0.8)',
                    'rgba(255, 206, 86, 0.8)',
                    'rgba(75, 192, 192, 0.8)',
                    'rgba(153, 102, 255, 0.8)'
                ],
                borderColor: '#fff',
                borderWidth: 2
            }]
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
            plugins: {
                legend: {
                    position: 'right',
                    labels: {
                        padding: 20,
                        boxWidth: 12,
                        font: {
                            size: 12
                        }
                    }
                },
                tooltip: {
                    callbacks: {
                        label: function(context) {
                            return context.label + ': ' + context.parsed + '%';
                        }
                    }
                }
            },
            cutout: '70%'
        }
    });

    // Data Table Functionality
    const dataTable = document.getElementById('dataTable');
    if (dataTable) {
        new simpleDatatables.DataTable(dataTable, {
            perPage: 10,
            perPageSelect: [5, 10, 15, 20, 25],
            columns: [
                { select: 5, sort: "desc" }  // Sort by date column descending
            ],
            labels: {
                placeholder: "Search...",
                perPage: "{select} entries per page",
                noRows: "No entries found",
                info: "Showing {start} to {end} of {rows} entries"
            }
        });
    }

    // Sidebar Toggle
    const sidebarToggleBtn = document.getElementById('sidebarToggle');
    const sidebar = document.querySelector('.sidebar');
    const mainContent = document.querySelector('.main-content');
    
    if (sidebarToggleBtn) {
        sidebarToggleBtn.addEventListener('click', function() {
            sidebar.classList.toggle('collapsed');
            mainContent.classList.toggle('expanded');
            
            // Store sidebar state in localStorage
            const sidebarCollapsed = sidebar.classList.contains('collapsed');
            localStorage.setItem('sidebarCollapsed', sidebarCollapsed);
        });
        
        // Check if sidebar state is stored in localStorage
        const sidebarCollapsed = localStorage.getItem('sidebarCollapsed') === 'true';
        if (sidebarCollapsed) {
            sidebar.classList.add('collapsed');
            mainContent.classList.add('expanded');
        }
    }
    
    // Notification Dropdown Toggle
    const notificationToggle = document.querySelector('.notification-toggle');
    const notificationDropdown = document.querySelector('.notification-dropdown');
    
    if (notificationToggle && notificationDropdown) {
        notificationToggle.addEventListener('click', function(e) {
            e.preventDefault();
            e.stopPropagation();
            notificationDropdown.classList.toggle('show');
        });
        
        // Close dropdown when clicking outside
        document.addEventListener('click', function(e) {
            if (!notificationDropdown.contains(e.target) && !notificationToggle.contains(e.target)) {
                notificationDropdown.classList.remove('show');
            }
        });
    }
    
    // Profile Dropdown Toggle
    const profileToggle = document.querySelector('.profile-toggle');
    const profileDropdown = document.querySelector('.profile-dropdown');
    
    if (profileToggle && profileDropdown) {
        profileToggle.addEventListener('click', function(e) {
            e.preventDefault();
            e.stopPropagation();
            profileDropdown.classList.toggle('show');
        });
        
        // Close dropdown when clicking outside
        document.addEventListener('click', function(e) {
            if (!profileDropdown.contains(e.target) && !profileToggle.contains(e.target)) {
                profileDropdown.classList.remove('show');
            }
        });
    }
    
    // Theme Toggle (Light/Dark)
    const themeToggle = document.getElementById('themeToggle');
    const body = document.body;
    
    if (themeToggle) {
        // Check if theme is stored in localStorage
        const darkTheme = localStorage.getItem('darkTheme') === 'true';
        if (darkTheme) {
            body.classList.add('dark-theme');
            themeToggle.checked = true;
        }
        
        themeToggle.addEventListener('change', function() {
            body.classList.toggle('dark-theme');
            
            // Store theme preference in localStorage
            const darkTheme = body.classList.contains('dark-theme');
            localStorage.setItem('darkTheme', darkTheme);
        });
    }
    
    // Form validation for any forms in the dashboard
    const forms = document.querySelectorAll('.needs-validation');
    
    Array.from(forms).forEach(form => {
        form.addEventListener('submit', event => {
            if (!form.checkValidity()) {
                event.preventDefault();
                event.stopPropagation();
            }
            
            form.classList.add('was-validated');
        }, false);
    });
    
    // Initialize tooltips
    const tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'));
    tooltipTriggerList.map(function (tooltipTriggerEl) {
        return new bootstrap.Tooltip(tooltipTriggerEl);
    });
    
    // Initialize popovers 
    const popoverTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="popover"]'));
    popoverTriggerList.map(function (popoverTriggerEl) {
        return new bootstrap.Popover(popoverTriggerEl);
    });
    
    // Date range picker initialization (if using daterangepicker)
    if (typeof daterangepicker !== 'undefined' && document.getElementById('dateRange')) {
        $('#dateRange').daterangepicker({
            opens: 'left',
            ranges: {
                'Today': [moment(), moment()],
                'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
                'Last 7 Days': [moment().subtract(6, 'days'), moment()],
                'Last 30 Days': [moment().subtract(29, 'days'), moment()],
                'This Month': [moment().startOf('month'), moment().endOf('month')],
                'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
            },
            startDate: moment().subtract(29, 'days'),
            endDate: moment()
        }, function(start, end, label) {
            console.log('Date range selected: ' + start.format('YYYY-MM-DD') + ' to ' + end.format('YYYY-MM-DD'));
            // Add your custom callback here
        });
    }
});
</script>
</body>
</html>