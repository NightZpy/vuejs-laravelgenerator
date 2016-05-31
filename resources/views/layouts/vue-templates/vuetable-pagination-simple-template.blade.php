<template id="vuetable-pagination-simple-template">
    <nav>
        <ul class="pager">
            <li class="@{{isOnFirstPage ? disabledClass : ''}}">
                <a class="btn" @click="loadPage('prev')"><i class="glyphicon glyphicon-chevron-left"></i></a>
            </li>
            <li class="@{{isOnLastPage ? disabledClass : ''}}">
                <a class="btn" @click="loadPage('next')"><i class="glyphicon glyphicon-chevron-right"></i></a>
            </li>
        </ul>
    </nav>
</template>