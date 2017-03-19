/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package modelo;

/**
 *
 * @author Ingryd Silva
 */
public class Triagem {
   private int idTriagem;
   private int idade;
   private int peso;
   private String jejum;
   private String status;
   private Doador doador;
   private Paciente paciente;

    /**
     * @return the idTriagem
     */
    public int getIdTriagem() {
        return idTriagem;
    }

    /**
     * @param idTriagem the idTriagem to set
     */
    public void setIdTriagem(int idTriagem) {
        this.idTriagem = idTriagem;
    }

    /**
     * @return the idade
     */
    public int getIdade() {
        return idade;
    }

    /**
     * @param idade the idade to set
     */
    public void setIdade(int idade) {
        this.idade = idade;
    }

    /**
     * @return the peso
     */
    public int getPeso() {
        return peso;
    }

    /**
     * @param peso the peso to set
     */
    public void setPeso(int peso) {
        this.peso = peso;
    }

    /**
     * @return the jejum
     */
    public String getJejum() {
        return jejum;
    }

    /**
     * @param jejum the jejum to set
     */
    public void setJejum(String jejum) {
        this.jejum = jejum;
    }

    /**
     * @return the status
     */
    public String getStatus() {
        return status;
    }

    /**
     * @param status the status to set
     */
    public void setStatus(String status) {
        this.status = status;
    }

    /**
     * @return the doador
     */
    public Doador getDoador() {
        return doador;
    }

    /**
     * @param doador the doador to set
     */
    public void setDoador(Doador doador) {
        this.doador = doador;
    }

    /**
     * @return the paciente
     */
    public Paciente getPaciente() {
        return paciente;
    }

    /**
     * @param paciente the paciente to set
     */
    public void setPaciente(Paciente paciente) {
        this.paciente = paciente;
    }

   
    
}
