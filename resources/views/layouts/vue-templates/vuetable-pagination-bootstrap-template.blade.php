<template id="vuetable-pagination-bootstrap-template">
    <nav>
        <ul class="pagination">
            <li class="@{{isOnFirstPage ? disabledClass : ''}}">
                <a class="btn" @click="loadPage('1')"><i class="glyphicon glyphicon-step-backward"></i></a>
            </li>                   
            <li class="@{{isOnFirstPage ? disabledClass : ''}}">
                <a class="btn" @click="loadPage('prev')"><i class="glyphicon glyphicon-chevron-left"></i></a>
            </li>
            <template v-for="n in totalPage">
                <li class="@{{isCurrentPage(n+1) ? ' active' : ''}}">
                    <a class="btn" @click="loadPage(n+1)"> @{{ n+1 }}</a>
                </li>
            </template>
            <li class="@{{isOnLastPage ? disabledClass : ''}}">
                <a class="btn" @click="loadPage('next')"><i class="glyphicon glyphicon-chevron-right"></i></a>
            </li>
            <li class="@{{isOnLastPage ? disabledClass : ''}}">
                <a class="btn" @click="loadPage(totalPage)"><i class="glyphicon glyphicon-step-forward"></i></a>
            </li>            
        </ul>
    </nav>
</template>