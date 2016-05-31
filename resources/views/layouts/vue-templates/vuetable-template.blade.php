<template id="vuetable-template">
     <div class="@{{wrapperClass}}">
        <table class="vuetable @{{tableClass}}">
            <thead>
                <tr>
                    <template v-for="field in fields">
                        <template v-if="field.visible">
                            <template v-if="isSpecialField(field.name)">
                                <th v-if="extractName(field.name) == '__checkbox'" class="@{{field.titleClass || ''}}">
                                    <input type="checkbox" @change="toggleAllCheckboxes($event.target.checked, field.name)">
                                </th>
                                <th v-else id="@{{field.name}}" class="@{{field.titleClass || ''}}">
                                    @{{field.title || ''}}
                                </th>
                            </template>
                            <template v-else>
                                <th @click="orderBy(field)"
                                    id="_@{{field.name}}"
                                    class="@{{field.titleClass || ''}} @{{isSortable(field) ? 'sortable' : ''}}">
                                    @{{getTitle(field) | capitalize}}&nbsp;
                                    <i v-if="isCurrentSortField(field)" class="@{{ sortIcon }}"></i>
                                </th>
                            </template>
                        </template>
                    </template>
                </tr>
            </thead>
            <tbody v-cloak>
                <tr v-for="(itemNumber, item) in tableData" @click="onRowClicked(item, $event)">
                    <template v-if="onRowChanged(item)"></template>
                    <template v-for="field in fields">
                        <template v-if="field.visible">
                            <template v-if="isSpecialField(field.name)">
                                <td v-if="extractName(field.name) == '__sequence'" class="vuetable-sequence @{{field.dataClass}}"
                                    v-html="tablePagination.from + itemNumber">
                                </td>
                                <td v-if="extractName(field.name) == '__checkbox'" class="vuetable-checkboxes @{{field.dataClass}}">
                                    <input type="checkbox"
                                        @change="toggleCheckbox($event.target.checked, item, field.name)"
                                        :checked="isSelectedRow(item, field.name)">
                                </td>
                                <td v-if="field.name == '__actions'" class="vuetable-actions @{{field.dataClass}}">
                                    <template v-for="action in itemActions">
                                        <button class="@{{ action.class }}" @click="callAction(action.name, item)" v-attr="action.extra">
                                            <i class="@{{ action.icon }}"></i> @{{ action.label }}
                                        </button>
                                    </template>
                                </td>
                            </template>
                            <template v-else>
                                <td v-if="hasCallback(field)" class="@{{field.dataClass}}" @dblclick="onCellDoubleClicked(item, field, $event)">
                                    @{{{ callCallback(field, item) }}}
                                </td>
                                <td v-else class="@{{field.dataClass}}" @dblclick="onCellDoubleClicked(item, field, $event)">
                                    @{{{ getObjectValue(item, field.name, "") }}}
                                </td>
                            </template>
                        </template>
                    </template>
                </tr>
            </tbody>
        </table>
        <div v-if="showPagination" class="vuetable-pagination @{{paginationClass}}">
            <div class="vuetable-pagination-info @{{paginationInfoClass}}"
                 v-html="paginationInfo">
            </div>
            <div v-show="tablePagination && tablePagination.last_page > 1"
                class="vuetable-pagination-component @{{paginationComponentClass}}">
                <component v-ref:pagination :is="paginationComponent"></component>
            </div>
        </div>
    </div>
</template>