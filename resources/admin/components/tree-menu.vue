<template>
  <ul :class="{'nav-menu__padding': addPadding, 'nav-menu__line': addLine}">
    <template v-for="(el, index) in node">
      <li>
        <template v-if="isBlock(el)">
          <span class="nav-menu__heading upper-case">{{ el.block }}</span>
          <tree-menu v-if="hasChildren(el)" :node="el.children"></tree-menu>
        </template>

        <template v-else-if="isMenu(el)">
          <a href="#">
            <i class="metismenu-icon pe-7s-rocket"></i>
            {{ el.menu }}
            <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
          </a>
          <tree-menu v-if="hasChildren(el)" :node="el.children" :add-padding="true" :add-line="true"></tree-menu>
        </template>

        <template v-else-if="isTitle(el)">
            <a href="#" :class="[{'nav-menu__active': el.active}, 'nav-menu__link']">{{ el.title }}</a>
          <tree-menu v-if="hasChildren(el)" :node="el.children" :add-padding="true"></tree-menu>
        </template>
      </li>
    </template>
  </ul>
</template>

<script>
export default {
  name: "tree-menu",
  props: {
    node: {
      type: Array/Object,
      default: {}
    },
    addLine: {
      type: Boolean,
      default: false
    },
    addPadding: {
      type: Boolean,
      default: false
    },
  },
  methods: {
    isBlock(el) {
      return !!el.block;
    },
    isMenu(el) {
      return !!el.menu;
    },
    isTitle(el) {
      return !!el.title;
    },
    hasChildren(el) {
      return !!el.children;
    },
    clicked(el) {
      if (!this.hasChildren(el)) {
        this.$emit('click', el);
      }
      else el.expended = !el.expended;
    }
  }
}
</script>

<style lang="scss">
@import './../sass/variables.scss';

.nav-menu__heading {
  font-size: .8rem;
  margin: .75rem 0;
  font-weight: bold;
  color: $sidebar-head;
  white-space: nowrap;
  position: relative;
}
.nav-menu__padding {
  position: relative;
  list-style: none;
  transition: padding 300ms;
  padding: .5em 0 0 2rem;
}
.nav-menu__line:before {
  content: '';
  height: 100%;
  opacity: 1;
  width: 3px;
  background: $nav-menu-vertical-line;
  position: absolute;
  left: 20px;
  top: 0;
  border-radius: 15px;
}
.nav-menu__link {
  color: $nav-submenu-link !important;
  padding-left: 15px !important;
}
.nav-menu__active {
  color: $nav-menu-link-active !important;
  font-weight: bold;
}
.nav-submenu__hidden {
  display: none;
}
</style>
