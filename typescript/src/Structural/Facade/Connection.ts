export default class Connection {

    private status: boolean = false;

    start() {
        this.status = true;
    }

    stop() {
        this.status = false;
    }

    getStatus() {
        const connected = this.status ? "Connected" : "Disconnected";
        console.log(`   [*] ${connected}`);
        return this.status;
    }
}