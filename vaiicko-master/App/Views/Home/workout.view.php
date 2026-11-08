<header class="page-header">
    <div>
        <p class="eyebrow">TRAINING LOG</p>
        <h1>Add your workout</h1>
        <p class="muted">Record the exercises you completed in today's session.</p>
    </div>
    <a class="button button-secondary" href="<?= htmlspecialchars($link->url(['Home', 'index'])) ?>">← Back to dashboard</a>
</header>

<section class="panel workout-form-panel">
    <div class="panel-heading">
        <div>
            <h2>Workout details</h2>
            <p class="muted">Enter the details of your workout.</p>
        </div>
    </div>

    <form action="<?= htmlspecialchars($link->url(['Home', 'workout'])) ?>" method="post">
        <div class="form-grid">
            <label class="form-field">
                <span>Workout name</span>
                <input type="text" value="Upper body" name="name">
            </label>
            <label class="form-field">
                <span>Date</span>
                <input type="date" value="2026-11-01" name="date">
            </label>
            <label class="form-field">
                <span>Duration (minutes)</span>
                <input type="number" value="45" min="1" name="duration">
            </label>
            <label class="form-field">
                <span>Workout type</span>
                <select name="type">
                    <option>Strength</option>
                    <option>Cardio</option>
                    <option>Mobility</option>
                </select>
            </label>
        </div>

        <div class="panel-heading exercises-heading">
            <div>
                <h2>Exercises</h2>
                <p class="muted">Example entries for your session</p>
            </div>
        </div>

        <div class="table-wrap">
            <table class="exercise-table">
                <thead>
                    <tr><th>Exercise</th><th>Sets</th><th>Reps</th><th>Weight (kg)</th></tr>
                </thead>
                <tbody>
                    <tr>
                        <td><input aria-label="Exercise 1" type="text" value="Bench press"></td>
                        <td><input aria-label="Sets for bench press" type="number" value="4" min="1"></td>
                        <td><input aria-label="Reps for bench press" type="number" value="10" min="1"></td>
                        <td><input aria-label="Weight for bench press" type="number" value="60" min="0"></td>
                    </tr>
                    <tr>
                        <td><input aria-label="Exercise 2" type="text" value="Incline dumbbell press"></td>
                        <td><input aria-label="Sets for incline dumbbell press" type="number" value="3" min="1"></td>
                        <td><input aria-label="Reps for incline dumbbell press" type="number" value="12" min="1"></td>
                        <td><input aria-label="Weight for incline dumbbell press" type="number" value="20" min="0"></td>
                    </tr>
                    <tr>
                        <td><input aria-label="Exercise 3" type="text" value="Lateral raises"></td>
                        <td><input aria-label="Sets for lateral raises" type="number" value="3" min="1"></td>
                        <td><input aria-label="Reps for lateral raises" type="number" value="15" min="1"></td>
                        <td><input aria-label="Weight for lateral raises" type="number" value="8" min="0"></td>
                    </tr>
                </tbody>
            </table>
        </div>

        <div class="form-actions">
            <a class="button button-secondary" href="<?= htmlspecialchars($link->url(['Home', 'index'])) ?>">Cancel</a>
            <button class="button button-primary" type="submit">
                Save workout
            </button>
        </div>
    </form>
</section>

<section class="panel">
    <div class="panel-heading">
        <div>
            <h2>Your workouts</h2>
            <p class="muted">Workouts saved in your database.</p>
        </div>
    </div>

    <?php if (empty($workouts)): ?>
        <p class="muted">No workouts recorded yet.</p>
    <?php else: ?>
        <div class="table-wrap">
            <table class="exercise-table">
                <thead>
                <tr>
                    <th>Name</th>
                    <th>Date</th>
                    <th>Duration</th>
                    <th>Type</th>
                    <th>Actions</th>
                </tr>
                </thead>
                <tbody>
                <?php foreach ($workouts as $workout): ?>
                    <tr>
                        <td><?= htmlspecialchars($workout->name ?? '') ?></td>
                        <td><?= htmlspecialchars($workout->date ?? '') ?></td>
                        <td><?= htmlspecialchars((string) ($workout->duration ?? '')) ?> min</td>
                        <td><?= htmlspecialchars($workout->type ?? '') ?></td>
                        <td>
                            <a
                                    class="button button-secondary"
                                    href="<?= htmlspecialchars($link->url('home.edit') . '&id=' . (int) $workout->id) ?>"
                            >
                                Edit
                            </a>
                            <form
                                    action="<?= htmlspecialchars($link->url('home.delete') . '&id=' . (int) $workout->id) ?>"
                                    method="post"
                                    onsubmit="return confirm('Are you sure you want to delete this workout?');"
                            >
                                <button class="button button-secondary" type="submit">
                                    Delete
                                </button>
                            </form>
                        </td>
                    </tr>
                <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    <?php endif; ?>
</section>

