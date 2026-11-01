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
            <p class="muted">This is a static preview; saving is not connected yet.</p>
        </div>
    </div>

    <form action="#" method="get">
        <div class="form-grid">
            <label class="form-field">
                <span>Workout name</span>
                <input type="text" value="Upper body" name="workout-name">
            </label>
            <label class="form-field">
                <span>Date</span>
                <input type="date" value="2026-11-01" name="workout-date">
            </label>
            <label class="form-field">
                <span>Duration (minutes)</span>
                <input type="number" value="45" min="1" name="duration">
            </label>
            <label class="form-field">
                <span>Workout type</span>
                <select name="workout-type">
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
            <button class="button button-primary" type="button">Save workout</button>
        </div>
    </form>
</section>
