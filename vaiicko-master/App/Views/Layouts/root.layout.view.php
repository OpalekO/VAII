
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HealthMate</title>
    <link rel="stylesheet" href="<?= $link->asset('css/style.css') ?>">
</head>
<body>
    <div class="app-shell">
        <aside class="sidebar">
            <a class="brand" href="<?= $link->url('home.index') ?>">
                <span class="brand-mark">H</span>
                <span>HealthMate</span>
            </a>

            <nav class="main-nav" aria-label="Main navigation">
                <a class="nav-link" href="<?= $link->url('home.index') ?>">
                    <span aria-hidden="true">⌂</span> Dashboard
                </a>
                <a class="nav-link" href="<?= $link->url('home.workout') ?>">
                    <span aria-hidden="true">＋</span> Add your workout
                </a>
            </nav>

            <div class="sidebar-note">
                <p class="sidebar-note-title">Small steps, strong habits.</p>
                <p>Keep track of your training and celebrate your progress.</p>
            </div>
        </aside>

        <main class="main-content">
            <?= $contentHTML ?>
        </main>
    </div>
</body>
</html>
