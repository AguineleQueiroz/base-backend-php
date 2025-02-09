<?php $this->extends('base-layout', [ 'title' => $title ]) ?>
<section>
    <div>
        <?php if (!empty($user)): ?>
            <p>
                <?= htmlspecialchars($user->name) ?>
            </p>
            <p>
                <?= $user->email ?>
            </p>
            <p>
                <?= $user->active ? 'Active' : 'Deactivated' ?>
            </p>
        <?php else: ?>
            <p>No information found</p>
        <?php endif; ?>
    </div>
</section>