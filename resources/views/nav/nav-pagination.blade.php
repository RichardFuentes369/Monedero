<nav aria-label="Page navigation example">
    <ul class="pagination">
        <li class="page-item" v-if="pagination.current_page > 1">
            <a class="page-link" @click.prevent="changePage(pagination.current_page - 1)" href="#">
                <span>
                    Atras
                </span>
            </a>
        </li>
        <li class="page-item" v-bind:class="[ page == isActived ? 'active' : '']" v-for="page in pagesNumber">
            <a class="page-link" @click.prevent="changePage(page)" href="#">
                @{{ page }}
            </a>
        </li>
        <li class="page-item" v-if="pagination.current_page < pagination.last_page">
            <a class="page-link" @click.prevent="changePage(pagination.current_page + 1)" href="#">
                <span>
                    Siguiente
                </span>
            </a>
        </li>
    </ul>
</nav>
