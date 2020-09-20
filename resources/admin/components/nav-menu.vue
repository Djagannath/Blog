<template>
  <nav class="vertical-nav-menu">
    <tree-menu :node="node"></tree-menu>
  </nav>
</template>

<script>
import TreeMenu from "./tree-menu";
export default {
  name: "nav-menu",
  components: {TreeMenu},
  props: {
    node: {
      type: Array/Object,
      default: {}
    },
  },
}
</script>

<style lang="scss">
@import './../sass/variables.scss';

.vertical-nav-menu {
  margin: 0;
  padding: 0;
  position: relative;
  list-style: none;
}
.vertical-nav-menu ul {
  list-style-type: none;
}
.vertical-nav-menu li a {
  display: block;
  line-height: 1.5rem;
  height: 1.5rem;
  padding: 0 1.5rem 0 35px;
  position: relative;
  border-radius: .25rem;
  color: $nav-menu-link;
  white-space: nowrap;
  transition: all .2s;
  margin: .1rem 0;
}
.vertical-nav-menu li a:hover {
  background: $nav-menu-background;
  text-decoration: none;
}
.vertical-nav-menu i.metismenu-state-icon,
.vertical-nav-menu i.metismenu-icon {
  text-align: center;
  width: 34px;
  height: 34px;
  line-height: 34px;
  position: absolute;
  left: 5px;
  top: 50%;
  margin-top: -17px;
  font-size: 1.5rem;
  opacity: .3;
  transition: color 300ms;
}
.vertical-nav-menu i.metismenu-state-icon {
  transition: transform 300ms;
  left: auto;
  right: 0;
}
</style>
