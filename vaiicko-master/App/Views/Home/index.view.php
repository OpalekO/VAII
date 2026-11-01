<header class="page-header">
    <div>
        <p class="eyebrow">YOUR OVERVIEW</p>
        <h1>Dashboard</h1>
        <p class="muted">Welcome back! Here is your health summary.</p>
    </div>
    <a href="<?= $link->url('home.workout') ?>" class="button button-primary">
    Add workout
</a>
</header>

<section class="stats-grid" aria-label="Training summary">
    <article class="stat-card">
        <p class="stat-label">Workouts this week</p>
        <p class="stat-value">4 <span class="stat-unit">sessions</span></p>
        <p class="stat-caption positive">You are keeping a good rhythm</p>
    </article>
    <article class="stat-card">
        <p class="stat-label">Active time</p>
        <p class="stat-value">5.5 <span class="stat-unit">hours</span></p>
        <p class="stat-caption">Across all workouts</p>
    </article>
    <article class="stat-card">
        <p class="stat-label">Calories burned</p>
        <p class="stat-value">2,140</p>
        <p class="stat-caption">Estimated weekly total</p>
    </article>
</section>

<section class="content-grid">
    <article class="panel">
        <div class="panel-heading">
            <div>
                <h2>Activity overview</h2>
                <p class="muted">Your activity over the last seven days</p>
            </div>
            <span class="pill">This week</span>
        </div>
        <div class="activity-chart" role="img" aria-label="Bar chart showing activity for Monday through Sunday">
            <div class="chart-column"><span style="height: 36%"></span><small>Mon</small></div>
            <div class="chart-column"><span style="height: 62%"></span><small>Tue</small></div>
            <div class="chart-column"><span style="height: 45%"></span><small>Wed</small></div>
            <div class="chart-column"><span style="height: 82%"></span><small>Thu</small></div>
            <div class="chart-column"><span style="height: 28%"></span><small>Fri</small></div>
            <div class="chart-column"><span style="height: 72%"></span><small>Sat</small></div>
            <div class="chart-column"><span style="height: 18%"></span><small>Sun</small></div>
        </div>
    </article>

    <article class="panel">
        <div class="panel-heading">
            <div>
                <h2>Latest workout</h2>
                <p class="muted">Your most recent session</p>
            </div>
        </div>
        <div class="workout-summary">
            <div class="workout-icon" aria-hidden="true">↗</div>
            <div>
                <h3>Upper body</h3>
                <p class="muted">Today · 45 minutes</p>
            </div>
        </div>
        <div class="summary-row"><span>Exercises</span><strong>6</strong></div>
        <div class="summary-row"><span>Sets completed</span><strong>18</strong></div>
        <a class="text-link" href="<?= $link->url('home.workout') ?>">
    </article>
</section>

<section class="panel reminders-panel">
    <div>
        <h2>Your next step</h2>
        <p class="muted">Stay consistent. Add a new training session when you finish your workout.</p>
    </div>
    <a class="button button-secondary" href="<?= $link->url('home.workout') ?>">
</section>
