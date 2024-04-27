import Channel from "./Channel";

export default class Exchange {

    public queue: string = "";
    private name: string = "";
    protected asserted: boolean = false;

    constructor(readonly channel: Channel) { }

    assert(name: string) {
        this.name = name;
        this.asserted = true
        console.log("   [*] Exchange asserted");
    }

    bindQueue(queue: string) {
        if (this.channel.status && this.asserted) {
            this.queue = queue;
            console.log("   [*] Binded queue\n");
            return {
                queue: this.queue,
                exchange: this.name
            }
        }
    }

}