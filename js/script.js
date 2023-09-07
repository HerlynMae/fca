const faqs = document.querySelectorAll(".faqs__tab__content h4");
faqs.forEach((faq) => {
  faq.addEventListener("click", () => {
    faq.nextElementSibling.classList.toggle("open");
    faq.querySelector("i").classList.toggle("open");
  });
});

const tabsNav = document.querySelectorAll(".faqs__link");
const tabsContent = document.querySelectorAll(".faqs__question");
tabsNav.forEach((tab) => {
  tab.addEventListener("click", () => {
    removeActiveTab();
    tab.classList.add("active");
    const activeContent = document.querySelector(`#${tab.id}-content`);
    removeActiveContent();
    activeContent.classList.add("active");
  });
});

function removeActiveTab() {
  tabsNav.forEach((tab) => {
    tab.classList.remove("active");
  });
}

function removeActiveContent() {
  tabsContent.forEach((tab) => {
    tab.classList.remove("active");
  });
}
