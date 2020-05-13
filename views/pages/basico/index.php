<ul class="nav nav-tabs" id="myTab" role="tablist">
    <li class="nav-item" role="presentation">
        <a class="nav-link active" id="tutorial-tab" data-toggle="tab" href="#tutorial" role="tab" aria-controls="tutorial" aria-selected="true">Soma</a>
    </li>
    <li class="nav-item" role="presentation">
        <a class="nav-link" id="subtrair-tab" data-toggle="tab" href="#subtrair" role="tab" aria-controls="subtrair" aria-selected="true">Subtrair</a>
    </li>
    <li class="nav-item" role="presentation">
        <a class="nav-link" id="pratica-tab" data-toggle="tab" href="#pratica" role="tab" aria-controls="pratica" aria-selected="false">Pratica</a>
    </li>
</ul>
<div class="tab-content" id="myTabContent">
    <div class="tab-pane fade show active" id="tutorial" role="tabpanel" aria-labelledby="tutorial-tab">
        <?php
        require __DIR__ . '/soma/index.html';
        ?>
    </div>

    <div class="tab-pane fade " id="subtrair" role="tabpanel" aria-labelledby="subtrair-tab">
        <?php
        require __DIR__ . '/subtrair/index.html';
        ?>
    </div>
    <div class="tab-pane fade" id="pratica" role="tabpanel" aria-labelledby="pratica-tab">
        <?php require __DIR__ . '/pratica/index.html'; ?>
    </div>
</div>