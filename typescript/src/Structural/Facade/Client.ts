import ExchangeFacade from "./ExchangeFacade";

const exchange = new ExchangeFacade();

const bind = exchange.bindQueue("exchange-name", "queue-name");

console.log(bind);