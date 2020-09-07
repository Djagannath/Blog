const navMenu = () => import('./../components/nav-menu').then(m => m.default);

const routes = [
  {
    path: '/blog',
    component: navMenu
  }
];

export default routes;
