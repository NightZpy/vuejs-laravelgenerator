<template id="vuetable-pagination-dropdown-template">
    <div class="@{{wrapperClass}}">
        <a @click="loadPage('prev')"
             class="btn @{{linkClass}} @{{isOnFirstPage ? disabledClass : ''}}">
            <i class="glyphicon glyphicon-chevron-left"></i>
        </a>
        <select id="vuetable-pagination-dropdown" class="form-control" @change="selectPage($event)">
            <template v-for="n in totalPage">
                <option class="@{{pageClass}}" value="@{{n+1}}">
                    @{{pageText}} @{{n+1}}
                </option>
            </template>
        </select>
        <a @click="loadPage('next')"
             class="btn @{{linkClass}} @{{isOnLastPage ? disabledClass : ''}}">
            <i class="glyphicon glyphicon-chevron-right"></i>
        </a>
    </div>
</template>