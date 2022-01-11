<?php $name = $request->query->get('category', 'world') ?>

Hello <?= htmlspecialchars($name, ENT_QUOTES, 'UTF-8') ?>