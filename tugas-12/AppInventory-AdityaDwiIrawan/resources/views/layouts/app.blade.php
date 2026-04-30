<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SEODash - SanberBook @yield('title')</title>

    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css" rel="stylesheet">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <style>
        :root {
            --sidebar-width: 250px;
            --topbar-height: 60px;
            --primary: #4361ee;
            --primary-light: #eef0fd;
            --text-muted: #6c757d;
            --border: #e9ecef;
            --bg: #f4f6f9;
            --white: #ffffff;
            --dark: #1a1a2e;
        }

        * { box-sizing: border-box; }

        body {
            font-family: 'Plus Jakarta Sans', sans-serif;
            background-color: var(--bg);
            color: #333;
            margin: 0;
        }

        /* ===== SIDEBAR ===== */
        .sidebar {
            position: fixed;
            top: 0;
            left: 0;
            width: var(--sidebar-width);
            height: 100vh;
            background: var(--white);
            border-right: 1px solid var(--border);
            z-index: 1000;
            overflow-y: auto;
        }

        .sidebar-brand {
            display: flex;
            align-items: center;
            gap: 10px;
            padding: 18px 20px;
            border-bottom: 1px solid var(--border);
            text-decoration: none;
        }

        .sidebar-brand .brand-icon {
            width: 32px;
            height: 32px;
            background: var(--primary);
            border-radius: 8px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 16px;
        }

        .sidebar-brand .brand-name {
            font-weight: 700;
            font-size: 1.1rem;
            color: var(--dark);
            letter-spacing: -0.3px;
        }

        .sidebar-section-label {
            font-size: 0.65rem;
            font-weight: 700;
            letter-spacing: 1.5px;
            text-transform: uppercase;
            color: var(--text-muted);
            padding: 18px 20px 6px;
        }

        .sidebar-nav {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .sidebar-nav li a {
            display: flex;
            align-items: center;
            gap: 10px;
            padding: 9px 20px;
            color: #555;
            text-decoration: none;
            font-size: 0.875rem;
            font-weight: 500;
            border-radius: 8px;
            margin: 2px 10px;
            transition: all 0.15s ease;
        }

        .sidebar-nav li a:hover {
            background: var(--primary-light);
            color: var(--primary);
        }

        .sidebar-nav li a.active {
            background: var(--primary);
            color: white;
        }

        .sidebar-nav li a .nav-icon {
            width: 20px;
            text-align: center;
            font-size: 1rem;
        }

        /* ===== TOPBAR ===== */
        .topbar {
            position: fixed;
            top: 0;
            left: var(--sidebar-width);
            right: 0;
            height: var(--topbar-height);
            background: var(--white);
            border-bottom: 1px solid var(--border);
            display: flex;
            align-items: center;
            justify-content: flex-end;
            padding: 0 24px;
            z-index: 999;
        }

        .topbar .avatar {
            width: 38px;
            height: 38px;
            border-radius: 50%;
            background: #ddd;
            overflow: hidden;
            cursor: pointer;
            border: 2px solid var(--border);
            position: relative;
        }

        .topbar .avatar img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .avatar-placeholder {
            width: 38px;
            height: 38px;
            border-radius: 50%;
            background: linear-gradient(135deg, var(--primary), #7b61ff);
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 0.8rem;
            font-weight: 600;
            cursor: pointer;
        }

        .topbar-dropdown {
            position: relative;
        }

        .dropdown-menu-topbar {
            display: none;
            position: absolute;
            right: 0;
            top: calc(100% + 8px);
            background: white;
            border: 1px solid var(--border);
            border-radius: 12px;
            min-width: 160px;
            box-shadow: 0 8px 24px rgba(0,0,0,0.08);
            padding: 6px;
            z-index: 9999;
        }

        .dropdown-menu-topbar.show {
            display: block;
        }

        .dropdown-menu-topbar a {
            display: flex;
            align-items: center;
            gap: 8px;
            padding: 8px 12px;
            color: #333;
            text-decoration: none;
            font-size: 0.85rem;
            border-radius: 8px;
            transition: background 0.1s;
        }

        .dropdown-menu-topbar a:hover {
            background: var(--bg);
        }

        .dropdown-menu-topbar .divider {
            height: 1px;
            background: var(--border);
            margin: 4px 0;
        }

        /* ===== MAIN CONTENT ===== */
        .main-content {
            margin-left: var(--sidebar-width);
            padding-top: var(--topbar-height);
            min-height: 100vh;
        }

        .page-wrapper {
            padding: 28px 28px;
        }

        /* ===== CARDS ===== */
        .card-seodash {
            background: var(--white);
            border-radius: 14px;
            border: 1px solid var(--border);
            padding: 28px;
            box-shadow: 0 1px 3px rgba(0,0,0,0.04);
        }

        .page-label {
            font-size: 0.75rem;
            color: var(--text-muted);
            text-transform: uppercase;
            letter-spacing: 1px;
            font-weight: 600;
            margin-bottom: 6px;
        }

        /* ===== ALERTS ===== */
        .alert-seodash {
            border-radius: 10px;
            border: none;
            padding: 12px 16px;
            font-size: 0.875rem;
        }

        /* ===== FORMS ===== */
        .form-control, .form-select {
            border-radius: 8px;
            border: 1px solid var(--border);
            font-size: 0.875rem;
            padding: 8px 12px;
            font-family: 'Plus Jakarta Sans', sans-serif;
        }

        .form-control:focus, .form-select:focus {
            border-color: var(--primary);
            box-shadow: 0 0 0 3px rgba(67,97,238,0.12);
        }

        .form-label {
            font-size: 0.85rem;
            font-weight: 600;
            color: #444;
            margin-bottom: 5px;
        }

        .btn-primary-seodash {
            background: var(--primary);
            border: none;
            border-radius: 8px;
            color: white;
            font-weight: 600;
            font-size: 0.875rem;
            padding: 9px 22px;
            cursor: pointer;
            transition: background 0.15s, transform 0.1s;
            font-family: 'Plus Jakarta Sans', sans-serif;
        }

        .btn-primary-seodash:hover {
            background: #3451d1;
            transform: translateY(-1px);
        }

        .btn-outline-seodash {
            background: transparent;
            border: 1px solid var(--primary);
            border-radius: 8px;
            color: var(--primary);
            font-weight: 600;
            font-size: 0.875rem;
            padding: 9px 22px;
            cursor: pointer;
            transition: all 0.15s;
            font-family: 'Plus Jakarta Sans', sans-serif;
        }

        .btn-outline-seodash:hover {
            background: var(--primary-light);
        }
    </style>

    @yield('styles')
</head>
<body>

    <!-- ===== SIDEBAR ===== -->
    <aside class="sidebar">
        <a href="/" class="sidebar-brand">
            <div class="brand-icon">
                <i class="bi bi-bar-chart-fill"></i>
            </div>
            <span class="brand-name">SEODash</span>
        </a>

        <div class="sidebar-section-label">HOME</div>
        <ul class="sidebar-nav">
            <li>
                <a href="/" class="{{ request()->is('/') ? 'active' : '' }}">
                    <span class="nav-icon"><i class="bi bi-grid-fill"></i></span>
                    Dashboard
                </a>
            </li>
        </ul>

        <div class="sidebar-section-label">FORM</div>
        <ul class="sidebar-nav">
            <li>
                <a href="/register" class="{{ request()->is('register') ? 'active' : '' }}">
                    <span class="nav-icon"><i class="bi bi-journal-text"></i></span>
                    Form Input
                </a>
            </li>
        </ul>
    </aside>

    <!-- ===== TOPBAR ===== -->
    <header class="topbar">
        <div class="topbar-dropdown" id="topbarDropdown">
            <div class="avatar-placeholder" onclick="toggleDropdown()">
                <i class="bi bi-person-fill"></i>
            </div>
            <div class="dropdown-menu-topbar" id="dropdownMenu">
                <a href="#"><i class="bi bi-person"></i> My Profile</a>
                <div class="divider"></div>
                <a href="#" style="color:#dc3545;"><i class="bi bi-box-arrow-right"></i> Logout</a>
            </div>
        </div>
    </header>

    <!-- ===== MAIN CONTENT ===== -->
    <main class="main-content">
        <div class="page-wrapper">
            @yield('content')
        </div>
    </main>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        function toggleDropdown() {
            document.getElementById('dropdownMenu').classList.toggle('show');
        }

        // Close dropdown when clicking outside
        document.addEventListener('click', function(e) {
            const dropdown = document.getElementById('topbarDropdown');
            if (!dropdown.contains(e.target)) {
                document.getElementById('dropdownMenu').classList.remove('show');
            }
        });
    </script>

    @yield('scripts')
</body>
</html>
