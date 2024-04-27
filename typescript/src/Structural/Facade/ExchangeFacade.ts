import Channel from "./Channel";
import Connection from "./Connection";
import Exchange from "./Exchange";

export default class ExchangeFacade {

    bindQueue(exchangeName: string, queueName: string) {
        const connection = new Connection();
        connection.start();

        const channel = new Channel(connection);
        channel.create();

        const exchange = new Exchange(channel);

        exchange.assert(exchangeName);
        const bind = exchange.bindQueue(queueName);

        return bind;
    }
}