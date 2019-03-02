<!-- VUE COMPONENTS -->

<template id="portlet">
  <div :id="id" class="portlet">
    <div class="portlet-heading portlet-default">
      <h3 class="portlet-title text-dark"><slot name="title"></slot></h3>
      <div class="portlet-widgets">
        <a v-if="reloadIcon" href="javascript:;" data-toggle="reload"><i class="ion-refresh"></i></a>
        <span class="divider"></span>
        <a data-toggle="collapse" :href="'#collapse-' + id"><i class="ion-minus-round"></i></a>
        <span class="divider"></span>
        <a href="#" data-toggle="remove"><i class="ion-close-round"></i></a>
      </div>
      <div class="clearfix"></div>
    </div>
    <div :id="'collapse-' + id" class="panel-collapse collapse in">
      <div class="portlet-body">
        <slot name="body"></slot>
      </div>
    </div>
  </div>
</template>

<template id="modal-full">
  <div :id="id" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-full">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
          <h4 class="modal-title" id="full-width-modalLabel"><slot name="title"></slot></h4>
        </div>
        <div class="modal-body">
          <slot name="body"></slot>
        </div>
      </div>
    </div>
  </div>
</template>

<template id="modal">
  <div :id="id" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
          <slot name="title"></slot>
        </div>
        <div class="modal-body">
          <slot name="body"></slot>
        </div>
      </div>
    </div>
  </div>
</template>


<!-- END VUE COMPONENTS -->