import Connection from "./Connection";

export default class Channel {

    public status: boolean = false;

    constructor(readonly connection: Connection) { }

    create() {
        if (this.connection.getStatus()) {
            console.log("   [*] Channel created")
            this.status = true
        }
        if (!this.status)
            throw new Error("Connection not established");

    }
}