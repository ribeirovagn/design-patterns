import Command from "./Command";


/**
 * Invoker Class
 * Classe que solicita a execução do comando
 */
export default class RemoteControl {

    public constructor(readonly command: Command) { }

    public pressButton(): void {
        return this.command.execute()
    }
}