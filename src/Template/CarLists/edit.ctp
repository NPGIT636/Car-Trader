<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\CarList $carList
 */
?>
<?=$this->element('menu');?>
<div class="carLists form large-9 medium-8 columns content">
    <?= $this->Form->create($carList) ?>
    <fieldset>
        <legend><?= __('Edit Car List') ?></legend>
       <?php
            echo $this->Form->control('name');
          
            echo $this->Form->control('car_price');
           
            echo $this->Form->control('active');
          echo $this->Form->control('is_sold');
         
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
