<?php $this->extends('base-layout', [ 'title' => $title ]) ?>
<section>
    <div>
        <h1>Users</h1>
        <h3>List of user data in the database</h3>

        <?php if (!empty($users)): ?>
            <ul>
                <?php foreach ($users as $user): ?>
                    <li>
                        <?= htmlspecialchars($user->name) ?> | <a href="/user/<?= $user->id ?>">Details</a>
                    </li>
                <?php endforeach; ?>
            </ul>
        <?php else: ?>
            <p>Nothing here ... </p>
        <?php endif; ?>
    </div>
</section>