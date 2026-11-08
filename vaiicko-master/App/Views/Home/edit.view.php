<?php
/** @var \Framework\Support\LinkGenerator $link */
/** @var \App\Models\Workout $workout */
?>
<header class="page-header">
    <div>
        <p class="eyebrow">TRAINING LOG</p>
        <h1>EDIT TEST</h1>
        <p class="muted">Update the details of your workout.</p>
    </div>
    <a class="button button-secondary" href="<?= htmlspecialchars($link->url(['Home', 'workout'])) ?>">Back to workouts</a>
</header>

<section class="panel workout-form-panel">
    <div class="panel-heading">
        <div>
            <h2>Workout details</h2>
            <p class="muted">Change the values and save your updates.</p>
        </div>
    </div>

    <form action="<?= htmlspecialchars($link->url(['Home', 'edit']) . '&id=' . (int) $workout->id) ?>" method="post">
        <div class="form-grid">
            <label class="form-field">
                <span>Workout name</span>
                <input
                    type="text"
                    name="name"
                    value="<?= htmlspecialchars($workout->name ?? '') ?>"
                    required
                >
            </label>

            <label class="form-field">
                <span>Date</span>
                <input
                    type="date"
                    name="date"
                    value="<?= htmlspecialchars($workout->date ?? '') ?>"
                    required
                >
            </label>

            <label class="form-field">
                <span>Duration (minutes)</span>
                <input
                    type="number"
                    name="duration"
                    value="<?= htmlspecialchars((string) ($workout->duration ?? '')) ?>"
                    min="1"
                    required
                >
            </label>

            <label class="form-field">
                <span>Workout type</span>
                <select name="type" required>
                    <option value="Strength" <?= $workout->type === 'Strength' ? 'selected' : '' ?>>Strength</option>
                    <option value="Cardio" <?= $workout->type === 'Cardio' ? 'selected' : '' ?>>Cardio</option>
                    <option value="Mobility" <?= $workout->type === 'Mobility' ? 'selected' : '' ?>>Mobility</option>
                </select>
            </label>
        </div>

        <div class="form-actions">
            <a class="button button-secondary" href="<?= htmlspecialchars($link->url(['Home', 'workout'])) ?>">Cancel</a>
            <button class="button button-primary" type="submit">
                Save changes
            </button>
        </div>
    </form>
</section>
