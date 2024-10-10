/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

import "./bootstrap";
// import '../sass/app.scss';
// import '../../public/assets/js/wow.js'
import { createApp } from "vue";
import dayjs from "dayjs";
import store from "./store/index";
import VueSweetalert2 from "vue-sweetalert2";
import "sweetalert2/dist/sweetalert2.min.css";
/**
 * Next, we will create a fresh Vue application instance. You may then begin
 * registering components with the application instance so they are ready
 * to use in your application's views. An example is included for you.
 */

const app = createApp({});
app.use(store);
app.use(VueSweetalert2);

import ExampleComponent from "./components/ExampleComponent.vue";
//-------------------->Signin<-----------------------
import SigninCustomer from "./components/signin/SigninCustomer.vue";
import SigninSeller from "./components/signin/SigninSeller.vue";
import LogoutCustomer from "./components/signin/LogoutCustomer.vue";
import LogoutSeller from "./components/signin/LogoutSeller.vue";
//====================>Register<================================
import StepOne from "./components/registers/cutomers/Step-1.vue";
import StepOneSeller from "./components/registers/juristic/Step-1.vue";

//=========================>Home<===============================
import HomeProductSlide from "./components/home/productSlide.vue";
import HomeCategory from "./components/home/category.vue";
import HomeRecommend from "./components/home/recommend.vue";
import HomeBestSeller from "./components/home/bestSeller.vue";
//-------------------->Header<-----------------------
import HeaderCustomer from "./components/HeaderCustomer.vue";
import HeaderSeller from "./components/HeaderSeller.vue";
//----------------->Banner<------------------
import BannerIndex from "./components/banners/Banner.vue";
import BannerContentDetail from "./components/banners/bannerContentDetail.vue";
import BannerPromotion from "./components/banners/BannerPromotion.vue";

//----------------->Product<------------------
import ProductDetail from "./components/products/ProductDetail.vue";
import SliderProduct from "./components/products/SliderProduct.vue";
import RelateProduct from "./components/data/RelateProduct.vue";
import FilterProduct from "./components/products/FilterProduct.vue";
import OptionOrder from "./components/products/OptionOrder.vue";
import OptionOrderGrid from "./components/products/OptionOrderGrid.vue";
import MenuGrid from "./components/products/MenuGrid.vue";
import DataProduct from "./components/data/DataProduct.vue";

import ViewAll from "./components/ViewAll.vue";

import PromotionVue from "./components/Promotion.vue";
//----------------->Contents<------------------
import ContentDetail from "./components/contents/Detail.vue";
import SidebarDetail from "./components/contents/SidebarDetail.vue";
import HighlightContent from "./components/contents/HighlightContent.vue";
import OtherContent from "./components/contents/OtherContent.vue";
import CartComponent from "./components/cart/CartComponent.vue";

//------------------->Customer<-------------------------
import ProfileCustomer from "./components/profiles/ProfileCustomer.vue";
import ProfileEdit from "./components/profiles/ProfileEdit.vue";
import StockCustomer from "./components/stocks/StockCustomer.vue";
import UpdateStock from "./components/stocks/UpdateStock.vue";
import NotificationCustomer from "./components/notifications/NotificationCustomer.vue";
import RewardCustomer from "./components/rewards/RewardCustomer.vue";
import AvatarSidebarCustomers from "./components/profiles/AvatarSidebarCustomers.vue";
import AvatarSidebarSeller from "./components/profiles/AvatarSidebarSeller.vue";
import CreditStore from "./components/creditStore/CreditStore.vue";

import PurchaseCustomer from "./components/orders/customers/purchase/Purchase.vue";
import DeliveryCustomer from "./components/orders/customers/delivery/Delivery.vue";
import PaymentCustomer from "./components/orders/customers/payments/Payment.vue";
import CreditNote from "./components/orders/customers/credit/creditNote.vue";
//-------------------->Seller<-----------------------
import ProfileSeller from "./components/profiles/ProfileSeller.vue";
import TripplanSeller from "./components/tripplans/sellers/TripplanSeller.vue";

app.component("step-one-customer", StepOne);
app.component("step-one-seller", StepOneSeller);

app.component("signin-customer", SigninCustomer);
app.component("signin-seller", SigninSeller);
app.component("logout-customer", LogoutCustomer);
app.component("logout-seller", LogoutSeller);

app.component("home-product-slide", HomeProductSlide);
app.component("home-category", HomeCategory);
app.component("home-recommend", HomeRecommend);
app.component("home-best-seller", HomeBestSeller);

app.component("header-customer", HeaderCustomer);
app.component("header-seller", HeaderSeller);

app.component("example-component", ExampleComponent);
app.component("banner-index", BannerIndex);
app.component("slider-product", SliderProduct);
app.component("product-detail", ProductDetail);
app.component("relate-product", RelateProduct);
app.component("filter-product", FilterProduct);
app.component("option-order", OptionOrder);
app.component("option-order-grid", OptionOrderGrid);
app.component("menu-grid", MenuGrid);
app.component("promotion-vue", PromotionVue);
app.component("view-all", ViewAll);
app.component("data-product", DataProduct);
app.component("highlight-content", HighlightContent);
app.component("other-content", OtherContent);
app.component("banner-promotion", BannerPromotion);
app.component("banner-contentdetail", BannerContentDetail);
app.component("content-detail", ContentDetail);
app.component("sidebar-detail", SidebarDetail);
app.component("cart-component", CartComponent);
app.component("profile-customer", ProfileCustomer);
app.component("profile-seller", ProfileSeller);
app.component("profile-edit", ProfileEdit);
app.component("stock-customer", StockCustomer);
app.component("update-stock", UpdateStock);
app.component("notification-customer", NotificationCustomer);
app.component("reward-customer", RewardCustomer);
app.component("avatar-sidebar-customers", AvatarSidebarCustomers);
app.component("avatar-sidebar-seller", AvatarSidebarSeller);

app.component("credit-store", CreditStore);

//========================>order<================================
app.component("purchase-customer", PurchaseCustomer);
app.component("delivery-customer", DeliveryCustomer);
app.component("payment-customer", PaymentCustomer);
app.component("credit-note", CreditNote);

//========================>Tripplan<=============================
app.component("tripplan-seller", TripplanSeller);

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// Object.entries(import.meta.glob('./**/*.vue', { eager: true })).forEach(([path, definition]) => {
//     app.component(path.split('/').pop().replace(/\.\w+$/, ''), definition.default);
// });

/**
 * Finally, we will attach the application instance to a HTML element with
 * an "id" attribute of "app". This element is included with the "auth"
 * scaffolding. Otherwise, you will need to add an element yourself.
 */

app.mount("#app");
