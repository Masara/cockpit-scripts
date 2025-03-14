<vue-view>

    <template>

        <kiss-container class="kiss-margin-large">

            <ul class="kiss-breadcrumbs">
                <li><a href="<?= $this->route('/migrate') ?>"><?= t('Migrate') ?></a></li>
            </ul>

            <p>
                <a href="<?= $this->route('/migrate/migrate') ?>" target="_blank"><?= t('Migrate (dry-run)') ?></a>
            </p>
            <p>
                <a href="<?= $this->route('/migrate/migrate/all/write') ?>" target="_blank"><?= t('Migrate') ?></a>
            </p>
            <p>
                <a href="<?= $this->route('/migrate/deleteV1stuff') ?>" target="_blank"><?= t('Delete v1 files') ?></a>
            </p>

        </kiss-container>

        <app-actionbar>

        </app-actionbar>

    </template>

    <script type="module">

        export default {}
    </script>
</vue-view>


<?php //$this->start('app-side-panel') ?>



<?php //$this->end('app-side-panel') ?>
